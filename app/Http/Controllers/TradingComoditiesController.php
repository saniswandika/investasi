<?php

namespace App\Http\Controllers;

use App\TradingComodities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class TradingComoditiesController extends Controller
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
            if ($this->user == 'member usaha'){
                abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $comodities = TradingComodities::all();
        return view('backend.comodities.index', compact('comodities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.comodities.create');
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
            'name'              => 'required',
        ]);

        $comodities = new TradingComodities();
        $comodities->name = $request->name;
        $comodities->type = $request->type;
        $comodities->plant_area = $request->plant_area;
        $comodities->production = $request->production;
        $comodities->desc = $request->desc;
        $comodities->location= $request->location;
        $comodities->lat= $request->lat;
        $comodities->long= $request->long;
        $comodities->link= $request->link;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/commodities/thumbnail/' . $image_name);

            $file->move('img/commodities', $image_name);

            $comodities->image = $image_name;
        }

        $comodities->save();

        return redirect(route('comodities.index'))->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TradingComodities  $tradingComodities
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comodities = TradingComodities::find($id);
        return view('backend.comodities.edit', compact('comodities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TradingComodities  $tradingComodities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comodities = TradingComodities::find($id);
        return view('backend.comodities.edit', compact('comodities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TradingComodities  $tradingComodities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comodities = TradingComodities::find($id);

        $this->validate($request, [
            'name'              => 'required',
        ]);

        $comodities->name = $request->name;
        $comodities->type = $request->type;
        $comodities->plant_area = $request->plant_area;
        $comodities->production = $request->production;
        $comodities->desc = $request->desc;
        $comodities->location= $request->location;
        $comodities->lat= $request->lat;
        $comodities->long= $request->long;
        $comodities->link= $request->link;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($comodities->image) {
                if (File::exists(public_path() . '/img/commodities/' . $comodities->image)) {
                    unlink(public_path() . '/img/commodities/' . $comodities->image);
                }

                if (File::exists(public_path() . '/img/commodities/thumbnail/' . $comodities->image)) {
                    unlink(public_path() . '/img/commodities/thumbnail/' . $comodities->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/commodities/thumbnail/' . $image_name);

            $file->move('img/commodities', $image_name);

            $comodities->image = $image_name;
        }

        $comodities->save();

        return redirect(route('comodities.index'))->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TradingComodities  $tradingComodities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comodities = TradingComodities::find($id);

        if ($comodities->image) {
            if (File::exists(public_path() . '/img/commodities/' . $comodities->image)) {
                unlink(public_path() . '/img/commodities/' . $comodities->image);
            }

            if (File::exists(public_path() . '/img/commodities/thumbnail/' . $comodities->image)) {
                unlink(public_path() . '/img/commodities/thumbnail/' . $comodities->image);
            }
        }

        $comodities->delete();

        return redirect(route('comodities.index'))->with('message', 'Data berhasil dihapus!');

    }
}
