<?php

namespace App\Http\Controllers;

use App\Publikasi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PublikasiController extends Controller
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

    public function index()
    {
        $users_id = Auth::user()->id;
        if (Auth::user()->role == 'user dinas') {
            $publikasi = DB::table('publikasi')
                ->join('users', 'users.id', '=', 'publikasi.users_id')
                ->where('users_id', $users_id)
                ->get();
        } else {
            $publikasi = DB::table('publikasi')
                ->join('users', 'users.id', '=', 'publikasi.users_id')
                ->get();
        }

        return view('backend.publikasi.index', compact('publikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.publikasi.create');
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
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $publikasi = new publikasi();
        $publikasi->users_id = $currentuserid;
        $publikasi->judul = $request->judul;
        $publikasi->deskripsi = $request->deskripsi;

        if ($request->file) {
            $this->validate($request, [
                'file' => 'required|file|mimes:pdf|max:102400',
            ]);
            $file = $request->file('file');
            $ext = $request->file('file')->extension();
            $file_name = time() . '.' . $ext;
            $file->move('pub/file', $file_name);

            $publikasi->file = $file_name;
        }

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:100000',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/pub/thumbnail/' . $image_name);

            $file->move('img/pub/', $image_name);

            $publikasi->image = $image_name;
        }

        $publikasi->save();

        return redirect(route('publikasi.index'))->with('message', 'Publikasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publikasi = publikasi::find($id);

        return view('backend.publikasi.view', compact('publikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publikasi = publikasi::find($id);

        return view('backend.publikasi.edit', compact('publikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publikasi = publikasi::find($id);

        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $publikasi->judul = $request->judul;
        $publikasi->deskripsi = $request->deskripsi;

        if ($request->file) {
            $this->validate($request, [
                'file' => 'required|file|mimes:pdf|max:100000',
            ]);
            $file = $request->file('file');
            $ext = $request->file('file')->extension();
            $file_name = time() . '.' . $ext;

            if ($publikasi->file) {
                if (File::exists(public_path() . '/pub/file/' . $publikasi->file)) {
                    unlink(public_path() . '/pub/file/' . $publikasi->file);
                }
            }

            $file->move('pub/file/', $file_name);

            $publikasi->file = $file_name;
        }

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:100000',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/pub/thumbnail/' . $image_name);

            $file->move('img/pub/', $image_name);

            $publikasi->image = $image_name;
        }

        $publikasi->save();

        return redirect(route('publikasi.index'))->with('message', 'Data publikasi berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publikasi = publikasi::find($id);

        if ($publikasi->file) {
            if (File::exists(public_path() . '/pub/file/' . $publikasi->file)) {
                unlink(public_path() . '/pub/file/' . $publikasi->file);
            }
        }

        $publikasi->delete();

        return redirect(route('publikasi.index'))->with('message', 'Data publikasi berhasil dihapus!');
    }
}
