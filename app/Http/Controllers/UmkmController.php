<?php

namespace App\Http\Controllers;

use App\Umkm;
use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Lang;

class UmkmController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'umkm')->first();

        return view('newpage.umkm', compact('banner'));

    }
    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
