<?php

namespace App\Http\Controllers;

use App\WJISRegistration;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class WJISRegistrationController extends Controller
{

    public function index()
    {
       $wjisRegistration = WJISRegistration:: get();
        return view('backend.wjisRegistration.index' , compact('wjisRegistration'));
    }


    public function show($id)
    {
        $wjisRegistration = wjisRegistration::find($id);

        return view('backend.wjisRegistration.view', compact('wjisRegistration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wjisRegistration  $wjisRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wjisRegistration = wjisRegistration::find($id);

        return view('backend.wjisRegistration.edit', compact('wjisRegistration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wjisRegistration  $wjisRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wjisRegistration = wjisRegistration::find($id);

       

        $wjisRegistration->name = $request->name;
        $wjisRegistration->email = $request->email;
        $wjisRegistration->position = $request->position;
        $wjisRegistration->company = $request->company;
        $wjisRegistration->investmentId = $request->investmentId;
        $wjisRegistration->investmentName = $request->investmentName;
        $wjisRegistration->country = $request->country;

        
        $wjisRegistration->save();

        return redirect(route('wjisRegistration.index'))->with('message', 'Data WJIS Registration diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wjisRegistration  $wjisRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $wjisRegistration = wjisRegistration::findOrFail($id); // Find the record by ID or throw an exception if not found

            

            $wjisRegistration->delete(); // Delete the record from the database

            return redirect(route('wjisRegistration.index'))->with('message', 'Data WJIS Registration berhasil dihapus!');
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the deletion process
            return redirect(route('wjisRegistration.index'))->with('error', 'Gagal menghapus data WJIS Registration: ' . $e->getMessage());
        }
    }


}