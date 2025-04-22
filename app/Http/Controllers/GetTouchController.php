<?php

namespace App\Http\Controllers;

use App\Country;
use App\Banner;

class GetTouchController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'contact')->first();
        $countries = Country::all();

        return view('newpage.get-in-touch', [

            'countries' => $countries,
            'banner' => $banner

        ]);
    }

}
