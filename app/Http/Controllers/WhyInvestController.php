<?php

namespace App\Http\Controllers;

use App\WhyInvest;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class WhyInvestController extends Controller
{

    public function index()
    {
       $whyInvest = WhyInvest::join('users','users.id','=','whyInvest.users_id')
            ->orderBy('whyInvest.created_at', 'desc')
            ->get();
        return view('backend.whyinvest.index' , compact('whyInvest'));
    }

    public function create()
    {
        return view('backend.whyinvest.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'content'   => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $whyInvest = new WhyInvest();
        $whyInvest->users_id = $currentuserid;
        $whyInvest->title = $request->title;
        $whyInvest->highlight = $request->highlight;
        $whyInvest->slug = $request->slug;
        $whyInvest->label = $request->label;
        $whyInvest->titleTwo = $request->titleTwo;
        $whyInvest->detailLabel = $request->detailLabel;
        $whyInvest->detailTitle = $request->detailTitle;
        $whyInvest->content = $request->content;
        $whyInvest->isActive = 1;
        $whyInvest->isBahasa = $request->isBahasa;


        if ($request->imageSideBar) {
            $this->validate($request, [
                'imageSideBar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('imageSideBar');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/why-invest/thumbnail/' . $image_name);

            $file->move('img/why-invest/', $image_name);

            $whyInvest->imageSideBar = $image_name;
        }

        if ($request->detailImage) {
            $this->validate($request, [
                'detailImage' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('detailImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/why-invest/thumbnail/' . $image_name);

            $file->move('img/why-invest/', $image_name);

            $whyInvest->detailImage = $image_name;
        }

        if ($request->bannerImage) {
            $this->validate($request, [
                'bannerImage' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('bannerImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/why-invest/thumbnail/' . $image_name);

            $file->move('img/why-invest/', $image_name);

            $whyInvest->bannerImage = $image_name;
        }

        $whyInvest->save();

        return redirect(route('whyinvest.index'))->with('message', 'konten berhasil ditambahkan!');
    }


    public function show($id)
    {
        $whyInvest = WhyInvest::join('users','users.id','=','whyInvest.users_id')->find($id);

        return view('backend.whyinvest.view', compact('whyInvest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whyInvest = whyInvest::find($id);

        return view('backend.whyinvest.edit', compact('whyInvest'));
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
        $whyInvest = whyInvest::find($id);

        $whyInvest->title = $request->title;
        $whyInvest->highlight = $request->highlight;
        $whyInvest->slug = $request->slug;
        $whyInvest->label = $request->label;
        $whyInvest->titleTwo = $request->titleTwo;
        $whyInvest->detailLabel = $request->detailLabel;
        $whyInvest->detailTitle = $request->detailTitle;
        $whyInvest->content = $request->content;
        $whyInvest->isBahasa = $request->isBahasa;


        if ($request->imageSideBar) {
            $this->validate($request, [
                'imageSideBar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('imageSideBar');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/why-invest/thumbnail/' . $image_name);

            $file->move('img/why-invest/', $image_name);

            $whyInvest->imageSideBar = $image_name;
        }

        if ($request->detailImage) {
            $this->validate($request, [
                'detailImage' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('detailImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/why-invest/thumbnail/' . $image_name);

            $file->move('img/why-invest/', $image_name);

            $whyInvest->detailImage = $image_name;
        }

        if ($request->bannerImage) {
            $this->validate($request, [
                'bannerImage' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('bannerImage');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/why-invest/thumbnail/' . $image_name);

            $file->move('img/why-invest/', $image_name);

            $whyInvest->bannerImage = $image_name;
        }

        $whyInvest->save();

        return redirect(route('whyinvest.index'))->with('message', 'Data Why Invest berhasil diperbarui!');

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
        $whyInvest = whyInvest::findOrFail($id); // Find the record by ID or throw an exception if not found

        if ($whyInvest->imageSideBar) {
            $imagePath = public_path('img/why-invest/' . $whyInvest->imageSideBar);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        if ($whyInvest->detailImage) {
            $imagePath = public_path('img/why-invest/' . $whyInvest->detailImage);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        if ($whyInvest->bannerImage) {
            $imagePath = public_path('img/why-invest/' . $whyInvest->bannerImage);

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the image file
            }
        }

        $whyInvest->delete(); // Delete the record from the database

        return redirect(route('whyinvest.index'))->with('message', 'Data Why Invest berhasil dihapus!');
    } catch (\Exception $e) {
        // Handle any exceptions that occur during the deletion process
        return redirect(route('whyinvest.index'))->with('error', 'Gagal menghapus data Why Invest: ' . $e->getMessage());
    }
}


}