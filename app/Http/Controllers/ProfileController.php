<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Profile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
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
        $profile = Profile::all();
        return view('backend.profile.index', compact('profile'));
    }

    public function create()
    {
        return view('backend.profile.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'       => 'required',
        ]);

        $profile = new Profile();
        $profile->name = $request->name;
        $profile->desc = $request->desc;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/profile/thumbnail/' . $image_name);

            $file->move('img/profile', $image_name);
            $profile->image = $image_name;
        }

        if ($request->peta) {
            $this->validate($request, [
                'peta' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('peta');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/profile/thumbnail/' . $image_name);

            $file->move('img/profile', $image_name);
            $profile->peta = $image_name;
        }

        $profile->save();

        return redirect(route('profile.index'))->with('message', 'Profile berhasil ditambahkan!');
    }

    public function show($id)
    {
        $profile = Profile::find($id);
        return view('backend.profile.view', compact('profile'));
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('backend.profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $this->validate($request, [
            'name'       => 'required',
        ]);

        $profile->name = $request->name;
        $profile->desc = $request->desc;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($profile->image) {
                if (File::exists(public_path() .'/img/profile/' . $profile->image)) {
                    unlink(public_path() . '/img/profile/' . $profile->image);
                }

                if (File::exists(public_path() .'/img/profile/thumbnail/' . $profile->image)) {
                    unlink(public_path() . '/img/profile/thumbnail/' . $profile->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/profile/thumbnail/' . $image_name);

            $file->move('img/profile', $image_name);
            $profile->image = $image_name;
        }

        if ($request->peta) {
            $this->validate($request, [
                'peta' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('peta');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($profile->peta) {
                if (File::exists(public_path() .'/img/profile/' . $profile->peta)) {
                    unlink(public_path() . '/img/profile/' . $profile->peta);
                }

                if (File::exists(public_path() .'/img/profile/thumbnail/' . $profile->peta)) {
                    unlink(public_path() . '/img/profile/thumbnail/' . $profile->peta);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/profile/thumbnail/' . $image_name);

            $file->move('img/profile', $image_name);
            $profile->peta = $image_name;
        }

        $profile->save();

        return redirect(route('profile.index'))->with('message', 'Profile berhasil diperbarui!');

    }

    public function destroy($id)
    {
        $profile = Profile::find($id);

        if ($profile->image) {
            if (File::exists(public_path() .'/img/profile/' . $profile->image)) {
                unlink(public_path() . '/img/profile/' . $profile->image);
            }

            if (File::exists(public_path() .'/img/profile/thumbnail/' . $profile->image)) {
                unlink(public_path() . '/img/profile/thumbnail/' . $profile->image);
            }

            if ($profile->peta) {
                if (File::exists(public_path() .'/img/profile/' . $profile->peta)) {
                    unlink(public_path() . '/img/profile/' . $profile->peta);
                }

                if (File::exists(public_path() .'/img/profile/thumbnail/' . $profile->peta)) {
                    unlink(public_path() . '/img/profile/thumbnail/' . $profile->peta);
                }
            }
        }

        $profile->delete();

        return redirect(route('profile.index'))->with('message', 'Profile berhasil dihapus!');
    }
}
