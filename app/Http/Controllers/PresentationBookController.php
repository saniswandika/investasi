<?php

namespace App\Http\Controllers;

use App\Publikasi;
use App\Banner;

class PresentationBookController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'presentation-book')->first();
        $publikasi = Publikasi::orderBy('created_at', 'desc')
            ->get();

        return view('newpage.presentation-book', compact('publikasi', 'banner'));

    }
    public function show($slug)
    {
        $publikasi = Publikasi::where('slug', '=', $slug)->first();

        return view('newpage.presentation-book-detail', compact('publikasi'));
    }
    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
