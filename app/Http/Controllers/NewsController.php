<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Lang;

class NewsController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'news')->first();

        if (Lang::locale() === 'id'){
            $news = Artikel::where('lang_type','=', "id")
                                ->orderBy('created_at', 'desc')
                                ->paginate(9);
            $news = json_encode($news);
            $news = json_decode($news);

            return view('newpage.news', compact('news', 'banner'));
        }else{
            $news = Artikel::where('lang_type','=', "en")
                                            ->orderBy('created_at', 'desc')
                                            ->paginate(9);
            $news = json_encode($news);
            $news = json_decode($news);

            return view('newpage.news', compact('news', 'banner'));
        }
        return view('newpage.news');

    }

    public function show($slug)
    {
        $news = Artikel::where('slug', '=', $slug)->first();

        return view('newpage.news-detail', compact('news'));
    }

    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
