<?php

namespace App\Http\Controllers;

use App\TradingComodities;
use App\Banner;
use Lang;

class CommodityController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'commodity')->first();
        $comodities = TradingComodities::orderBy('created_at', 'desc')
                ->get();

        return view('newpage.commodity', compact('comodities', 'banner'));

    }

    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
