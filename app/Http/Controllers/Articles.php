<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\User;
use Lang;

class Articles extends Controller
{
    public function index($slug = false)
    {
        if ($slug === false) {

            //dd(Lang::locale());
            if (Lang::locale() === 'id') {
                $artikel = Artikel::where('lang_type', 'id')->orderBy('art_id', 'DESC')->paginate(9);
                return view('articles', compact('artikel'));
            } else {
                $artikel = Artikel::where('lang_type', 'en')->orderBy('art_id', 'DESC')->paginate(9);
                return view('articles', compact('artikel'));
            }
        }
    }

    public function show($slug)
    {
        $artikel = [];
        $art = Artikel::where('slug', $slug)->first();
        $artikel['judul'] = $art->judul;
        $artikel['slug'] = $art->slug;
        $artikel['lang_type'] = $art->lang_type;
        $artikel['image'] = $art->image;
        $artikel['konten'] = $art->konten;
        $artikel['created_at'] = $art->created_at;

        if ($art->users_id === 0) {
            $artikel['name'] = 'Berita';
        } else {
            $artikel['name'] = User::where('users.id', $art->users_id)->first()->name;
        }

        return view('articles-detail', compact('artikel'));
    }

    public function CrawlNews()
    {
        echo 'for testing';

    }
}
