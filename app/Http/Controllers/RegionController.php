<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Lang;

class RegionController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'region')->first();
        $region = Profile::all();

        return view('newpage.region', compact('region', 'banner'));

    }

    public function show($slug)
    {
        $region = Profile::where('slug', '=', $slug)->first();

        return view('newpage.region-detail', compact('region'));
    }

    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
