<?php

namespace App\Http\Controllers;

use App\Industry;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user()->role;
            if ($this->user == 'member usaha') {
                abort(403);
            }
            return $next($request);
        });
    }

    public function home()
    {
        return view('newpage.industry');
    }

    public function index()
    {
        $users_id = Auth::user()->id;
        if (Auth::user()->role == 'user dinas') {
            $industri = Industry::join('users', 'users.id', '=', 'industries.users_id')
                ->where('users_id', $users_id)
                ->get();
        } else {
            $industri = Industry::all();
        }
        return view('backend.industri.index', compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industri = []; // Empty array
        
        return view('backend.industri.create', compact('industri'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'location' => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $industri = new Industry();
        $industri->users_id = $currentuserid;
        $industri->name = $request->name;
        $industri->code = $request->code;
        $industri->location = $request->location;
        $industri->lat = $request->lat;
        $industri->long = $request->long;
        $industri->company_name = $request->company_name;
        $industri->office_address = $request->office_address;
        $industri->phone = $request->phone;
        $industri->fax = $request->fax;
        $industri->website = $request->website;
        $industri->email = $request->email;
        $industri->presdir = $request->presdir;
        $industri->director = $request->director;
        $industri->contact_person = $request->contact_person;
        $industri->distance_to_jkt = $request->distance_to_jkt;
        $industri->distance_to_harbour = $request->distance_to_harbour;
        $industri->distance_to_airport = $request->distance_to_airport;
        $industri->total_area = $request->total_area;
        $industri->total_develop_area = $request->total_develop_area;
        $industri->total_salable_area = $request->total_salable_area;
        $industri->total_available_area = $request->total_available_area;
        $industri->facilities = $request->facilities;
        $industri->ui_ws_source = $request->ui_ws_source;
        $industri->ui_ws_capacity = $request->ui_ws_capacity;
        $industri->ui_el_source = $request->ui_el_source;
        $industri->ui_el_capacity = $request->ui_el_capacity;
        $industri->ui_tel_source = $request->ui_el_source;
        $industri->ui_tel_capacity = $request->ui_el_capacity;
        $industri->ui_fo_source = $request->ui_fo_source;
        $industri->ui_fo_capacity = $request->ui_fo_capacity;
        $industri->ui_gas_source = $request->ui_gas_source;
        $industri->ui_gas_capacity = $request->ui_gas_capacity;
        $industri->ei_selling_industrial_land = $request->ei_selling_industrial_land;
        $industri->ei_selling_warehouse = $request->ei_selling_warehouse;
        $industri->ei_charge_service = $request->ei_charge_service;
        $industri->ei_charge_water = $request->ei_charge_water;
        $industri->ei_charge_electricity = $request->ei_charge_electricity;
        $industri->ei_charge_gas = $request->ei_charge_gas;
        $industri->ei_charge_tel = $request->ei_charge_tel;
        $industri->ei_charge_fo = $request->ei_charge_fo;
        $industri->number_oc = $request->number_oc;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/industry/thumbnail/' . $image_name);

            $file->move('img/industry', $image_name);

            $industri->image = $image_name;
        }

        if ($request->image2) {
            $this->validate($request, [
                'image2' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image2');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/industry/thumbnail/' . $image_name);

            $file->move('img/industry', $image_name);

            $industri->image2 = $image_name;
        }

        $industri->save();

        return redirect(route('industri.index'))->with('message', 'Industri berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $industri = Industry::find($id);
        return view('backend.industri.view', compact('industri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industri = Industry::find($id);
        return view('backend.industri.edit', compact('industri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $industri = Industry::find($id);

        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'location' => 'required',
        ]);

        $industri->name = $request->name;
        $industri->code = $request->code;
        $industri->location = $request->location;
        $industri->lat = $request->lat;
        $industri->long = $request->long;
        $industri->company_name = $request->company_name;
        $industri->office_address = $request->office_address;
        $industri->phone = $request->phone;
        $industri->fax = $request->fax;
        $industri->website = $request->website;
        $industri->email = $request->email;
        $industri->presdir = $request->presdir;
        $industri->director = $request->director;
        $industri->contact_person = $request->contact_person;
        $industri->distance_to_jkt = $request->distance_to_jkt;
        $industri->distance_to_harbour = $request->distance_to_harbour;
        $industri->distance_to_airport = $request->distance_to_airport;
        $industri->total_area = $request->total_area;
        $industri->total_develop_area = $request->total_develop_area;
        $industri->total_salable_area = $request->total_salable_area;
        $industri->total_available_area = $request->total_available_area;
        $industri->facilities = $request->facilities;
        $industri->ui_ws_source = $request->ui_ws_source;
        $industri->ui_ws_capacity = $request->ui_ws_capacity;
        $industri->ui_el_source = $request->ui_el_source;
        $industri->ui_el_capacity = $request->ui_el_capacity;
        $industri->ui_tel_source = $request->ui_tel_source;
        $industri->ui_tel_capacity = $request->ui_tel_capacity;
        $industri->ui_fo_source = $request->ui_fo_source;
        $industri->ui_fo_capacity = $request->ui_fo_capacity;
        $industri->ui_gas_source = $request->ui_gas_source;
        $industri->ui_gas_capacity = $request->ui_gas_capacity;
        $industri->ei_selling_industrial_land = $request->ei_selling_industrial_land;
        $industri->ei_selling_warehouse = $request->ei_selling_warehouse;
        $industri->ei_charge_service = $request->ei_charge_service;
        $industri->ei_charge_water = $request->ei_charge_water;
        $industri->ei_charge_electricity = $request->ei_charge_electricity;
        $industri->ei_charge_gas = $request->ei_charge_gas;
        $industri->ei_charge_tel = $request->ei_charge_tel;
        $industri->ei_charge_fo = $request->ei_charge_fo;
        $industri->number_oc = $request->number_oc;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($industri->image) {
                if (File::exists(public_path() . '/industry/' . $industri->image)) {
                    unlink(public_path() . '/industry/' . $industri->image);
                }

                if (File::exists(public_path() . '/industry/thumbnail/' . $industri->image)) {
                    unlink(public_path() . '/industry/thumbnail/' . $industri->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/industry/thumbnail/' . $image_name);

            $file->move('img/industry', $image_name);

            $industri->image = $image_name;
        }

        if ($request->image2) {
            $this->validate($request, [
                'image2' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image2');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($industri->image2) {
                if (File::exists(public_path() . '/industry/' . $industri->image2)) {
                    unlink(public_path() . '/industry/' . $industri->image2);
                }

                if (File::exists(public_path() . '/industry/thumbnail/' . $industri->image2)) {
                    unlink(public_path() . '/industry/thumbnail/' . $industri->image2);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/industry/thumbnail/' . $image_name);

            $file->move('img/industry', $image_name);

            $industri->image2 = $image_name;
        }

        $industri->save();

        return redirect(route('industri.index'))->with('message', 'Industri berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industri = Industry::find($id);

        if ($industri->image) {
            if (File::exists(public_path() . '/industry/' . $industri->image)) {
                unlink(public_path() . '/industry/' . $industri->image);
            }

            if (File::exists(public_path() . '/industry/thumbnail/' . $industri->image)) {
                unlink(public_path() . '/industry/thumbnail/' . $industri->image);
            }
        }

        $industri->delete();

        return redirect(route('industri.index'))->with('message', 'Industri berhasil dihapus!');
    }
}
