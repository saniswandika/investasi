<?php

namespace App\Http\Controllers;

use App\NewIndustry;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class NewIndustryController extends Controller
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
        $industri = NewIndustry::all();
        return view('backend.newindustri.index', compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.newindustri.create');
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

        $industri = new NewIndustry();
        $industri->name = $request->name;
        $industri->area = $request->area;
        $industri->desc = $request->desc;
        $industri->location= $request->location;
        $industri->lat= $request->lat;
        $industri->long= $request->long;
        $industri->link= $request->link;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/new-industry/thumbnail/' . $image_name);

            $file->move('img/new-industry', $image_name);

            $industri->image = $image_name;
        }

        $industri->save();

        return redirect(route('industri-new.index'))->with('message', 'Industri berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewIndustry  $newIndustry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $industri = NewIndustry::find($id);
        return view('backend.newindustri.index', compact('industri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewIndustry  $newIndustry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industri = NewIndustry::find($id);
        return view('backend.newindustri.edit', compact('industri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewIndustry  $newIndustry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $industri = NewIndustry::find($id);

        $this->validate($request, [
            'name'              => 'required',
        ]);

        $industri->name = $request->name;
        $industri->area = $request->area;
        $industri->desc = $request->desc;
        $industri->location= $request->location;
        $industri->lat= $request->lat;
        $industri->long= $request->long;
        $industri->link= $request->link;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($industri->image) {
                if (File::exists(public_path() .'/img/new-industry/' . $industri->image)) {
                    unlink(public_path() . '/img/new-industry/' . $industri->image);
                }

                if (File::exists(public_path() .'/img/new-industry/thumbnail/' . $industri->image)) {
                    unlink(public_path() . '/img/new-industry/thumbnail/' . $industri->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/new-industry/thumbnail/' . $image_name);

            $file->move('img/new-industry', $image_name);

            $industri->image = $image_name;
        }

        $industri->save();

        return redirect(route('industri-new.index'))->with('message', 'Industri berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewIndustry  $newIndustry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industri = NewIndustry::find($id);

        if ($industri->image) {
            if (File::exists(public_path() .'/img/new-industry/' . $industri->image)) {
                unlink(public_path() . '/img/new-industry/' . $industri->image);
            }

            if (File::exists(public_path() .'/img/new-industry/thumbnail/' . $industri->image)) {
                unlink(public_path() . '/img/new-industry/thumbnail/' . $industri->image);
            }
        }

        $industri->delete();

        return redirect(route('industri-new.index'))->with('message', 'Industri berhasil dihapus!');
    }
}
