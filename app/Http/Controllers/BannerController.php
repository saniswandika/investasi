<?php

namespace App\Http\Controllers;

use App\Banner;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::join('users', 'users.id', '=', 'banner.users_id')
            ->select('banner.*', 'users.name', 'banner.created_at')
            ->orderBy('banner.created_at', 'desc')
            ->get();
    
        return view('backend.banner.index', compact('banner'));
    }
    

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
            'menu'       => 'required'
        ]);

        $currentuserid = Auth::user()->id;

        $params = new Banner();
        $params->users_id = $currentuserid;
        $params->menu = $request->menu;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/banner/thumbnail/' . $image_name);

            $file->move('img/banner/', $image_name);

            $params->image = $image_name;
        }

        $params->save();

        try {
            $params->save();
            return redirect(route('banner.index'))->with('message', 'Banner berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Handle the case when the data fails to save
            return redirect()->back()->withInput()->withErrors(['Banner gagal ditambahkan. Mohon dicoba kembali.']);
        }
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::with('user')
                        ->findOrFail($id);
    
        return view('backend.banner.view', compact('banner'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $westJavaSectorManagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('backend.banner.edit', compact('banner'));
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = Banner::find($id);

        $this->validate($request, [
            'menu'       => 'required'
        ]);

        $params->menu = $request->menu;


        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($params->image) {
                if (File::exists(public_path() .'/img/banner/' . $params->image)) {
                    unlink(public_path() . '/img/banner/' . $params->image);
                }

                if (File::exists('/img/banner/thumbnail/' . $params->image)) {
                    unlink(public_path() . '/img/banner/thumbnail/' . $params->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/banner/thumbnail/' . $image_name);

            $file->move('img/banner', $image_name);

            $params->image = $image_name;
        }

        $params->save();

        return redirect(route('banner.index'))->with('message', 'Data Banner berhasil diperbarui!');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);

        if ($banner->image) {
            if (File::exists(public_path() .'/img/banner/' . $banner->image)) {
                unlink(public_path() . '/img/banner/' . $banner->image);
            }
        }

        $banner->delete();

        return redirect(route('banner.index'))->with('message', 'Data banner berhasil dihapus!');
    }

}