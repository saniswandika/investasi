<?php

namespace App\Http\Controllers;

use App\Fintech;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class FintechController extends Controller
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
        $fintech = Fintech::all();
        return view('backend.fintech.index', compact('fintech'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fintech.create');
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
            'nama_fintech'       => 'required',
            'logo_fintech'       => 'required',
            'lokasi_fintech'     => 'required',
        ]);

        $fintech = new fintech();
        $fintech->nama_fintech = $request->nama_fintech;
        $fintech->lokasi_fintech = $request->lokasi_fintech;
        $fintech->website = $request->website;
        $fintech->perusahaan = $request->perusahaan;
        $fintech->register = $request->register;
        $fintech->tanggal_reg = $request->tanggal_reg;

        if ($request->logo_fintech) {
            $this->validate($request, [
                'logo_fintech' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('logo_fintech');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/fintech/thumbnail/' . $image_name);

            $file->move('img/fintech', $image_name);

            $fintech->logo_fintech = $image_name;
        }

        $fintech->save();

        return redirect(route('fintech.index'))->with('message', 'Fintech berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fintech  $fintech
     * @return \Illuminate\Http\Response
     */
    public function show(Fintech $fintech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fintech  $fintech
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fintech = fintech::find($id);

        return view('backend.fintech.edit', compact('fintech'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fintech  $fintech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fintech = fintech::find($id);

        $this->validate($request, [
            'nama_fintech'       => 'required',
            'lokasi_fintech'     => 'required',
        ]);

        $fintech->nama_fintech = $request->nama_fintech;
        $fintech->lokasi_fintech = $request->lokasi_fintech;
        $fintech->website = $request->website;
        $fintech->perusahaan = $request->perusahaan;
        $fintech->register = $request->register;
        $fintech->tanggal_reg = $request->tanggal_reg;


        if ($request->logo_fintech) {
            $this->validate($request, [
                'logo_fintech' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('logo_fintech');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($fintech->logo_fintech) {
                if (File::exists(public_path() .'/img/fintech/' . $fintech->logo_fintech)) {
                    unlink(public_path() . '/img/fintech/' . $fintech->logo_fintech);
                }

                if (File::exists(public_path() .'/img/fintech/thumbnail/' . $fintech->logo_fintech)) {
                    unlink(public_path() . '/img/fintech/thumbnail/' . $fintech->logo_fintech);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/fintech/thumbnail/' . $image_name);

            $file->move('img/fintech', $image_name);

            $fintech->logo_fintech = $image_name;
        }

        $fintech->save();

        return redirect(route('fintech.index'))->with('message', 'Fintech berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fintech  $fintech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fintech = fintech::find($id);

        if ($fintech->logo_fintech) {
            if (File::exists(public_path() .'/img/fintech/' . $fintech->logo_fintech)) {
                unlink(public_path() . '/img/fintech/' . $fintech->logo_fintech);
            }

            if (File::exists(public_path() .'/img/fintech/thumbnail/' . $fintech->logo_fintech)) {
                unlink(public_path() . '/img/fintech/thumbnail/' . $fintech->logo_fintech);
            }
        }
        $fintech->delete();

        return redirect(route('fintech.index'))->with('message', 'fintech berhasil dihapus!');
    }
}
