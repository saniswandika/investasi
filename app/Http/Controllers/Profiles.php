<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class Profiles extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('profiles', compact('profile'));
    }

    public function show($slug)
    {
        $profile = Profile::where('slug', $slug)->first();
        return view('profiles-detail', compact('profile'));
    }
}
