<?php

namespace App\Http\Controllers;

use \App\Industry;

class IndustriesController extends Controller
{
    public function home()
    {
        $industri = Industry::paginate(8);
        return view('newpage.industry');
    }

    public function index()
    {
        $industri = Industry::paginate(8);
        return view('industries', compact('industri'));
    }

    public function show($slug)
    {
        $industri = Industry::where('slug', $slug)->first();
        return view('industries-detail', compact('industri'));
    }
}
