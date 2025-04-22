<?php

namespace App\Http\Controllers;

use App\WestJavaSectorManagement;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class WestJavaSectorManagementController extends Controller
{

    public function index()
    {
        $sectormanagement = WestJavaSectorManagement::join('users', 'users.id', '=', 'westJavaSectorManagement.users_id')
            ->select('westJavaSectorManagement.*', 'users.name', 'westJavaSectorManagement.created_at')
            ->orderBy('westJavaSectorManagement.created_at', 'desc')
            ->get();

        return view('backend.westjavasectormanagement.index', compact('sectormanagement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.westjavasectormanagement.create');
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
            'title' => 'required',
            'content' => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $westJavaSectorManagement = new WestJavaSectorManagement();
        $westJavaSectorManagement->users_id = $currentuserid;
        $westJavaSectorManagement->headline = $request->headline;
        $westJavaSectorManagement->content = $request->content;
        $westJavaSectorManagement->title = $request->title;
        $westJavaSectorManagement->isBahasa = $request->isBahasa;
        $westJavaSectorManagement->isActive = 1;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/westJavaSectorManagement/thumbnail/' . $image_name);

            $file->move('img/westJavaSectorManagement/', $image_name);

            $westJavaSectorManagement->image = $image_name;
        }

        $westJavaSectorManagement->save();

        try {
            $westJavaSectorManagement->save();
            return redirect(route('westjavasectormanagement.index'))->with('message', 'Sektor Management berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Handle the case when the data fails to save
            return redirect()->back()->withInput()->withErrors(['Sektor Management gagal ditambahkan. Mohon dicoba kembali.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\westJavaSectorManagement  $westJavaSectorManagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sectormanagement = WestJavaSectorManagement::join('users', 'users.id', '=', 'westJavaSectorManagement.users_id')
            ->select('westJavaSectorManagement.*', 'users.name', 'westJavaSectorManagement.created_at')
            ->find($id);

        return view('backend.westjavasectormanagement.view', compact('sectormanagement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WestJavaSectorManagement  $westJavaSectorManagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectormanagement = WestJavaSectorManagement::find($id);

        return view('backend.westjavasectormanagement.edit', compact('sectormanagement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WestJavaSectorManagement  $westJavaSectorManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sectormanagement = WestJavaSectorManagement::find($id);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $sectormanagement->title = $request->title;
        $sectormanagement->content = $request->content;
        $sectormanagement->isBahasa = $request->isBahasa;
        $sectormanagement->isActive = $request->isActive;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($sectormanagement->image) {
                if (File::exists(public_path() . '/img/westJavaSectorManagement/' . $sectormanagement->image)) {
                    unlink(public_path() . '/img/westJavaSectorManagement/' . $sectormanagement->image);
                }

                if (File::exists('/img/westJavaSectorManagement/thumbnail/' . $sectormanagement->image)) {
                    unlink(public_path() . '/img/westJavaSectorManagement/thumbnail/' . $sectormanagement->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/westJavaSectorManagement/thumbnail/' . $image_name);

            $file->move('img/westJavaSectorManagement', $image_name);

            $sectormanagement->image = $image_name;
        }

        $sectormanagement->save();

        return redirect(route('westjavasectormanagement.index'))->with('message', 'Data Sector Management berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WestJavaSectorManagement  $westJavaSectorManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sectormanagement = WestJavaSectorManagement::find($id);

        if ($sectormanagement->image) {
            if (File::exists(public_path() . '/img/westJavaSectorManagement/' . $sectormanagement->image)) {
                unlink(public_path() . '/img/westJavaSectorManagement/' . $sectormanagement->image);
            }
        }

        $sectormanagement->delete();

        return redirect(route('westjavasectormanagement.index'))->with('message', 'Data Sector Management berhasil dihapus!');
    }

}
