<?php

namespace App\Http\Controllers;

use App\WestJavaSectorManagement;
use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Lang;

class SectorController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'sector')->first();
        if (Lang::locale() === 'id'){
            $sector = WestJavaSectorManagement::where('isBahasa', 0)
                                ->where('slug', '!=', 'wjis-indonesia')
                                ->orderBy('title', 'asc')
                                ->get();

            return view('newpage.sector', compact('sector', 'banner'));
        }else{
            $sector = WestJavaSectorManagement::where('isBahasa', 1)
                                            ->where('slug', '!=', 'wjis-en')
                                            ->orderBy('title', 'asc')
                                            ->get();

            return view('newpage.sector', compact('sector', 'banner'));
        }

    }

    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
