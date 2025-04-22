<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fintech;

class Fintechfront extends Controller
{
    public function index()
    {
        $fintech = Fintech::orderBy('id', 'desc')->paginate(9);
        return view('fintech', compact('fintech'));
    }

    public function show($slug)
    {
        $fintech = Fintech::where('slug', $slug)->first();
        return view('fintech-detail', compact('fintech'));
    }

    public function search(Request $request)
    {
        $fintech = $request->fintech;

        $search = Fintech::where('nama_fintech','like',"%".$fintech."%")
            ->paginate(9);
        return view('searchfintech', compact('search'));
    }
}
