<?php

namespace App\Http\Controllers;

use App\EconomyStatistic;
use App\WestJavaRegionsManagement;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class EconomyStatisticController extends Controller
{

    public function index()
    {
       $economyStatistic = EconomyStatistic::all();
        return view('backend.economyStatistic.index' , compact('economyStatistic'));
    }

    public function create()
    {
        return view('backend.economyStatistic.create');
    }

    public function store(Request $request)
    {
        

        $currentuserid = Auth::user()->id;

        $economyStatistic = new EconomyStatistic();
        $economyStatistic->inflation = $request->inflation;
        $economyStatistic->inflationDate = $request->inflationDate;
        $economyStatistic->economicGrowth = $request->economicGrowth;
        $economyStatistic->economicGrowthDate = $request->economicGrowthDate;
        $economyStatistic->westJavaExport = $request->westJavaExport;
        $economyStatistic->westJavaExportDate = $request->westJavaExportDate;

        

        $economyStatistic->save();

        return redirect(route('economyStatistic.index'))->with('message', 'konten berhasil ditambahkan!');
    }


    public function show($id)
    {
        $economyStatistic = EconomyStatistic::find($id);

        return view('backend.economyStatistic.view', compact('economyStatistic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $economyStatistic = EconomyStatistic::find($id);

        return view('backend.economyStatistic.edit', compact('economyStatistic'));
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
        $economyStatistic = EconomyStatistic::find($id);

       

        $economyStatistic->inflation = $request->inflation;
        $economyStatistic->inflationDate = $request->inflationDate;
        $economyStatistic->economicGrowth = $request->economicGrowth;
        $economyStatistic->economicGrowthDate = $request->economicGrowthDate;
        $economyStatistic->westJavaExport = $request->westJavaExport;
        $economyStatistic->westJavaExportDate = $request->westJavaExportDate;

        

        $economyStatistic->save();

        return redirect(route('economyStatistic.index'))->with('message', 'Data Economy Statistic berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\economyStatistic  $economyStatistic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    try {
        $economyStatistic = EconomyStatistic::findOrFail($id); // Find the record by ID or throw an exception if not found

        

        $economyStatistic->delete(); // Delete the record from the database

        return redirect(route('economyStatistic.index'))->with('message', 'Data Economy Statistic berhasil dihapus!');
    } catch (\Exception $e) {
        // Handle any exceptions that occur during the deletion process
        return redirect(route('economyStatistic.index'))->with('error', 'Gagal menghapus data Economy Statistic : ' . $e->getMessage());
    }
}


}