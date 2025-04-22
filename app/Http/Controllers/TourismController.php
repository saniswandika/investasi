<?php

namespace App\Http\Controllers;

use App\Tourism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class TourismController extends Controller
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
        $tourism = Tourism::all();
        return view('backend.tourism.index', compact('tourism'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tourism.create');
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
            'type'              => 'required',
            'category'          => 'required',
            'location'          => 'required',
        ]);

        $tourism = new Tourism();

        $tourism->name = $request->name;
        $tourism->type = $request->type;
        $tourism->category = $request->category;
        $tourism->desc = $request->desc;
        $tourism->location= $request->location;
        $tourism->lat= $request->lat;
        $tourism->long= $request->long;
        $tourism->link= $request->link;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/tourism/thumbnail/' . $image_name);

            $file->move('img/tourism', $image_name);

            $tourism->image = $image_name;
        }

        $tourism->save();

        return redirect(route('tourism.index'))->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tourism  $tourism
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourism = Tourism::find($id);
        return view('backend.tourism.edit', compact('tourism'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tourism  $tourism
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourism = Tourism::find($id);
        return view('backend.tourism.edit', compact('tourism'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tourism  $tourism
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tourism = Tourism::find($id);

        $this->validate($request, [
            'name'              => 'required',
            'type'              => 'required',
            'category'          => 'required',
            'location'          => 'required',
        ]);

        $tourism->name = $request->name;
        $tourism->type = $request->type;
        $tourism->category = $request->category;
        $tourism->desc = $request->desc;
        $tourism->location= $request->location;
        $tourism->lat= $request->lat;
        $tourism->long= $request->long;
        $tourism->link= $request->link;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($tourism->image) {
                if (File::exists(public_path() . '/img/tourism/' . $tourism->image)) {
                    unlink(public_path() . '/img/tourism/' . $tourism->image);
                }

                if (File::exists(public_path() . '/img/tourism/thumbnail/' . $tourism->image)) {
                    unlink(public_path() . '/img/tourism/thumbnail/' . $tourism->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/tourism/thumbnail/' . $image_name);

            $file->move('img/tourism', $image_name);

            $tourism->image = $image_name;
        }

        $tourism->save();

        return redirect(route('tourism.index'))->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tourism  $tourism
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourism = Tourism::find($id);

        if ($tourism->image) {
            if (File::exists(public_path() . '/img/tourism/' . $tourism->image)) {
                unlink(public_path() . '/img/tourism/' . $tourism->image);
            }

            if (File::exists(public_path() . '/img/tourism/thumbnail/' . $tourism->image)) {
                unlink(public_path() . '/img/tourism/thumbnail/' . $tourism->image);
            }
        }

        $tourism->delete();

        return redirect(route('tourism.index'))->with('message', 'Data berhasil dihapus!');
    }
}
