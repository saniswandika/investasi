<?php

namespace App\Http\Controllers;

use App\EconomyGraphic;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;


class EconomyGraphicController extends Controller
{

    public function index()
    {
        $query = EconomyGraphic::orderBy('Id', 'desc');
        $sql = $query->toSql();
        $economyGraphic = $query->get() ;
        // dd($economyGraphic->toArray());
        return view('backend.economyGraphic.index' , compact('economyGraphic'));
    }

    public function create()
    {
        return view('backend.economyGraphic.create');
    }

    public function store(Request $request)
    {
        

        $currentuserid = Auth::user()->id;

        $economyGraphic = new EconomyGraphic();
        $economyGraphic->value = $request->value;
        $economyGraphic->date = $request->date;
        

        

        $economyGraphic->save();

        return redirect(route('economyGraphic.index'))->with('message', 'konten berhasil ditambahkan!');
    }


    public function show($id)
    {
        $economyGraphic = EconomyGraphic::find($id);

        return view('backend.economyGraphic.view', compact('economyGraphic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $economyGraphic = EconomyGraphic::find($id);

        return view('backend.economyGraphic.edit', compact('economyGraphic'));
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
        $economyGraphic = EconomyGraphic::find($id);

       

        $economyGraphic->value = $request->value;
        $economyGraphic->date = $request->date;
      
        $economyGraphic->save();

        return redirect(route('economyGraphic.index'))->with('message', 'Data Economy Graphic  berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\economyGraphic  $economyStatistic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    try {
        $economyGraphic = EconomyGraphic::findOrFail($id); // Find the record by ID or throw an exception if not found

        

        $economyGraphic->delete(); // Delete the record from the database

        return redirect(route('economyGraphic.index'))->with('message', 'Data Economy Graphic berhasil dihapus!');
    } catch (\Exception $e) {
        // Handle any exceptions that occur during the deletion process
        return redirect(route('economyGraphic.index'))->with('error', 'Gagal menghapus data Economy Graphic : ' . $e->getMessage());
    }
}


}