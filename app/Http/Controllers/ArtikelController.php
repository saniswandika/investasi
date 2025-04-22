<?php

namespace App\Http\Controllers;

use App\Artikel;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
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
       $artikel = Artikel::join('users','users.id','=','artikel.users_id')
            ->orderBy('artikel.created_at', 'desc')
            ->get();
        return view('backend.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.artikel.create');
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
            'judul'       => 'required',
            'konten'   => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $artikel = new artikel();
        $artikel->users_id = $currentuserid;
        $artikel->judul = $request->judul;
        $artikel->lang_type = $request->lang_type;
        $artikel->konten = $request->konten;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/artikel/thumbnail/' . $image_name);

            $file->move('img/artikel/', $image_name);

            $artikel->image = $image_name;
        }

        $artikel->save();

        return redirect(route('artikel.index'))->with('message', 'artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = artikel::join('users','users.id','=','artikel.users_id')->find($id);

        return view('backend.artikel.view', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikel::find($id);

        return view('backend.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = artikel::find($id);

        $this->validate($request, [
            'judul'       => 'required',
            'konten'      => 'required',
        ]);

        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->lang_type = $request->lang_type;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($artikel->image) {
                if (File::exists(public_path() .'/img/artikel/' . $artikel->image)) {
                    unlink(public_path() . '/img/artikel/' . $artikel->image);
                }

                if (File::exists('/img/artikel/thumbnail/' . $artikel->image)) {
                    unlink(public_path() . '/img/artikel/thumbnail/' . $artikel->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/artikel/thumbnail/' . $image_name);

            $file->move('img/artikel', $image_name);

            $artikel->image = $image_name;
        }

        $artikel->save();

        return redirect(route('artikel.index'))->with('message', 'Data artikel berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::find($id);

        if ($artikel->image) {
            if (File::exists(public_path() .'/img/artikel/' . $artikel->image)) {
                unlink(public_path() . '/img/artikel/' . $artikel->image);
            }
        }

        $artikel->delete();

        return redirect(route('artikel.index'))->with('message', 'Data artikel berhasil dihapus!');
    }
}
