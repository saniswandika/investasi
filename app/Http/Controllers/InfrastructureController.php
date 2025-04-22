<?php

namespace App\Http\Controllers;

use App\Infrastructure;
use App\InfrastructureCategory;
use App\InfrastructureSubcategory;
use App\InfrastructureStatus;
use App\Coordinate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfrastructureController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user()->role;
            if ($this->user == 'member usaha'){
                abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $infrastructure = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
                                        ->join('infrastructure_subcategories','infrastructure_subcategories.id','=','infrastructures.subcategory' )
                                        ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
                                        ->select('infrastructure_categories.*','infrastructure_statuses.*','infrastructures.*', 'infrastructure_categories.name as catname', 'infrastructure_subcategories.name as subcatname', 'infrastructure_statuses.name as namestatus', 'infrastructures.name')
                                        ->get();

        //$string = preg_replace( "/\r|\n/", "", $infrastructure );
        //return json_encode($infrastructure, JSON_PRETTY_PRINT);
        return view('backend.infrastructure.index', compact('infrastructure'));

    }

    public function create()
    {
        $category = InfrastructureCategory::all();
        $subcategory = InfrastructureSubcategory::all();
        $status = InfrastructureStatus::all();
        return view('backend.infrastructure.create', compact('category', 'subcategory', 'status'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'inf_category'  => 'required',
            'subcategory'  => 'required',
            'status'          => 'required',
            'link'          => 'required',
            'detail'        => 'required',
            'geotype'       => 'required',
        ]);

        $infrastructure = new Infrastructure();

        $infrastructure->name = $request->name;
        $infrastructure->inf_category = $request->inf_category;
        $infrastructure->subcategory = $request->subcategory;
        $infrastructure->status = $request->status;
        $infrastructure->link = $request->link;
        $infrastructure->detail = $request->detail;
        $infrastructure->geotype = $request->geotype;
        $infrastructure->geojson = $request->geojson;
        $infrastructure->long = $request->long;
        $infrastructure->lat = $request->lat;

        $infrastructure->save();
        $lastid = $infrastructure->id;

        foreach ($request->addmore as $key => $value) {
            $value['inf_id'] = $lastid;
            Coordinate::create($value);
        }

        return redirect(route('infrastructure.index'))->with('message', 'Infrastruktur berhasil ditambahkan');
    }

    public function edit($id)
    {
        $category = InfrastructureCategory::all();
        $subcategory = InfrastructureSubcategory::all();
        $status = InfrastructureStatus::all();
        $inf = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_subcategories','infrastructure_subcategories.id','=','infrastructures.subcategory' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->select('infrastructure_categories.*','infrastructure_statuses.*','infrastructures.*', 'infrastructure_categories.name as catname','infrastructure_categories.id as catid', 'infrastructure_subcategories.name as subcatname','infrastructure_subcategories.id as subcatid', 'infrastructure_statuses.name as namestatus','infrastructure_statuses.id as idstatus', 'infrastructures.name')
            ->find($id);
        return view('backend.infrastructure.edit', compact('inf','category','subcategory','status'));
    }

    public function update(Request $request, $id)
    {
        $infrastructure = Infrastructure::find($id);

        $this->validate($request, [
            'name'          => 'required',
            'inf_category'  => 'required',
            'subcategory'  => 'required',
            'status'        => 'required',
            'link'          => 'required',
            'detail'        => 'required',
            'geotype'       => 'required',
            'long'       => 'required',
            'lat'       => 'required',
        ]);

        $infrastructure->name = $request->name;
        $infrastructure->inf_category = $request->inf_category;
        $infrastructure->subcategory = $request->subcategory;
        $infrastructure->status = $request->status;
        $infrastructure->link = $request->link;
        $infrastructure->detail = $request->detail;
        $infrastructure->geotype = $request->geotype;
        $infrastructure->geojson = $request->geojson;
        $infrastructure->long = $request->long;
        $infrastructure->lat = $request->lat;

        $infrastructure->save();

        return redirect(route('infrastructure.index'))->with('message', 'Infrastruktur berhasil diperbarui  ');
    }

    public function destroy($id)
    {
        $infrastructure = Infrastructure::find($id);

        $infrastructure->delete();
        return redirect(route('infrastructure.index'))->with('message', 'Infrastruktur berhasil dihapus');
    }

    public function toll_road($status)
    {
        $linestring = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status')
            ->where('infrastructures.inf_category', 1)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.*', 'infrastructures.geotype as type', 'infrastructures.id as ids')
            ->get();

        $linestring1 = json_decode($linestring, true);

        foreach($linestring1 as $key => $value) {
            $data_coor = DB::table('coordinates')
                ->leftJoin('infrastructures','infrastructures.id','=','coordinates.inf_id')
                ->select('coordinates.long as longitude', 'coordinates.lat as latitude')
                ->where('coordinates.inf_id', $value['ids'])
                ->get();

            $coordinatez = json_decode($data_coor, true);
            $coordinates = array();
            foreach($coordinatez as $keys => $values) {
                $coordinates[] = array((float)$values['longitude'], (float)$values['latitude']);
            }

            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => $coordinates)
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function railway($status)
    {
        $linestring = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status')
            ->where('infrastructures.inf_category', 2)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.*', 'infrastructures.geotype as type', 'infrastructures.id as ids')
            ->get();

        $linestring1 = json_decode($linestring, true);

        foreach($linestring1 as $key => $value) {
            $data_coor = DB::table('coordinates')
                ->leftJoin('infrastructures','infrastructures.id','=','coordinates.inf_id')
                ->select('coordinates.long as longitude', 'coordinates.lat as latitude')
                ->where('coordinates.inf_id', $value['ids'])
                ->get();

            $coordinatez = json_decode($data_coor, true);
            $coordinates = array();
            foreach($coordinatez as $keys => $values) {
                $coordinates[] = array((float)$values['longitude'], (float)$values['latitude']);
            }

            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => $coordinates)
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function railway_hst($status)
    {
        $linestring = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status')
            ->where('infrastructures.inf_category', 2)
            ->where('infrastructures.subcategory', 15)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.*', 'infrastructures.geotype as type', 'infrastructures.id as ids')
            ->get();

        $linestring1 = json_decode($linestring, true);

        foreach($linestring1 as $key => $value) {
            $data_coor = DB::table('coordinates')
                ->leftJoin('infrastructures','infrastructures.id','=','coordinates.inf_id')
                ->select('coordinates.long as longitude', 'coordinates.lat as latitude')
                ->where('coordinates.inf_id', $value['ids'])
                ->get();

            $coordinatez = json_decode($data_coor, true);
            $coordinates = array();
            foreach($coordinatez as $keys => $values) {
                $coordinates[] = array((float)$values['longitude'], (float)$values['latitude']);
            }

            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => $coordinates)
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function airport($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 3)
            ->where('infrastructures.subcategory', 1)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function seaport($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 3)
            ->where('infrastructures.subcategory', 2)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function lrt($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 3)
            ->where('infrastructures.subcategory', 3)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function hst($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 3)
            ->where('infrastructures.subcategory', 9)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function solid_waste($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 4)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function dam($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 5)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function hpp1($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 6)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function hpp2($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 10)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function rwtp1($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 7)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function rwtp2($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 11)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }

    public function rwtp3($status)
    {
        $troc = Infrastructure::join('infrastructure_categories','infrastructure_categories.id','=','infrastructures.inf_category' )
            ->join('infrastructure_statuses','infrastructure_statuses.id','=','infrastructures.status' )
            ->where('infrastructures.inf_category', 4)
            ->where('infrastructures.subcategory', 12)
            ->where('infrastructures.status', $status)
            ->select('infrastructures.name', 'infrastructures.inf_category', 'infrastructures.link', 'infrastructures.detail', 'infrastructures.geotype as type', 'infrastructures.long', 'infrastructures.lat')
            ->get();

        $troc_ori = json_decode($troc, true);
        $features = array();
        foreach($troc as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('name' => $value['name'], 'link' => $value['link'], 'detail' => $value['detail']),
                'geometry' => array(
                    'type' => $value['type'],
                    'coordinates' => array((float)$value['long'], (float)$value['lat']),
                ),
            );
        };

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        $final_data = json_encode($geojson, JSON_PRETTY_PRINT);
        return $final_data;
    }
}
