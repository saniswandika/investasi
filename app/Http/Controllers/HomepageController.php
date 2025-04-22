<?php

namespace App\Http\Controllers;

use App\Homepage;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class HomepageController extends Controller
{

    public function index()
    {
        $homepage = Homepage::join('users', 'users.id', '=', 'homepage.users_id')
        ->select('homepage.*', 'users.name', 'homepage.created_at') // Include created_at column
        ->orderBy('homepage.created_at', 'desc')
        ->get();
    
    return view('backend.homepage.index', compact('homepage'));
    
    }

    public function create()
    {
        return view('backend.homepage.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bannerText'       => 'required'
        ]);

        $currentuserid = Auth::user()->id;

        $homepage = new Homepage();
        $homepage->users_id = $currentuserid;
        $homepage->title = $request->title;
        $homepage->bannerText = $request->bannerText;
        $homepage->isBahasa = $request->isBahasa;
        // $homepage->slug = $request->slug;



        if ($request->bannerImage) {
            $this->validate($request, [
                'bannerImage' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('bannerImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/home-page/thumbnail/' . $image_name);

            $file->move('img/home-page/', $image_name);

            $homepage->bannerImage = $image_name;
        }


        if ($request->whyInvestImage) {
            $this->validate($request, [
                'whyInvestImage' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('whyInvestImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/home-page/thumbnail/' . $image_name);

            $file->move('img/home-page/', $image_name);

            $homepage->whyInvestImage = $image_name;
        }

        if ($request->sectorImage) {
            $this->validate($request, [
                'sectorImage' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('sectorImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/home-page/thumbnail/' . $image_name);

            $file->move('img/home-page/', $image_name);

            $homepage->sectorImage = $image_name;
        }

        if ($request->findInvestImage) {
            $this->validate($request, [
                'findInvestImage' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('findInvestImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/home-page/thumbnail/' . $image_name);

            $file->move('img/home-page/', $image_name);

            $homepage->findInvestImage = $image_name;
        }

        $homepage->save();

        return redirect(route('homepage.index'))->with('message', 'homepage berhasil ditambahkan!');
    }


    public function show($id)
    {
        $homepage = Homepage::join('users','users.id','=','homepage.users_id')->find($id);

        return view('backend.homepage.view', compact('homepage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homepage  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homepage = Homepage::find($id);

        return view('backend.homepage.edit', compact('homepage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homepage  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homepage = Homepage::find($id);
    
        $homepage->bannerText = $request->bannerText;
        $homepage->isBahasa = $request->isBahasa;
        $homepage->slug = $request->slug;
    
        $imageFields = ['bannerImage', 'whyInvestImage', 'sectorImage', 'findInvestImage'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $this->validate($request, [
                    $field => 'file|image|mimes:jpeg,png,jpg|max:2048',
                ]);
        
                $file = $request->file($field);
                $image_name = time() . '_' . $file->getClientOriginalName();
        
                if ($homepage->$field) {
                    if (File::exists(public_path('img/home-page/' . $homepage->$field))) {
                        unlink(public_path('img/home-page/' . $homepage->$field));
                    }
        
                    if (File::exists(public_path('img/home-page/thumbnail/' . $homepage->$field))) {
                        unlink(public_path('img/home-page/thumbnail/' . $homepage->$field));
                    }
                }
        
                $img = Image::make($file->getRealPath());
                $img->resize(450, 450, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('img/home-page/thumbnail/' . $image_name);
        
                $file->move('img/homepage', $image_name);
        
                $homepage->$field = $image_name;
            }
        }
        
    
        $homepage->save();
    
        return redirect(route('homepage.index'))->with('message', 'Data Homepage berhasil diperbarui!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\whyInvest  $whyInvest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    try {
        $homepage = Homepage::findOrFail($id); // Find the record by ID or throw an exception if not found

        if ($homepage->bannerImage) {
            $imagePath = public_path('img/home-page/' . $homepage->bannerImage);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        if ($homepage->whyInvestImage) {
            $imagePath = public_path('img/home-page/' . $homepage->whyInvestImage);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        if ($homepage->sectorImage) {
            $imagePath = public_path('img/home-page/' . $homepage->sectorImage);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        if ($homepage->findInvestImage) {
            $imagePath = public_path('img/home-page/' . $homepage->findInvestImage);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        

        $homepage->delete(); // Delete the record from the database

        return redirect(route('homepage.index'))->with('message', 'Data homepage berhasil dihapus!');
    } catch (\Exception $e) {
        // Handle any exceptions that occur during the deletion process
        return redirect(route('homepage.index'))->with('error', 'Gagal menghapus data homepage: ' . $e->getMessage());
    }
}


}