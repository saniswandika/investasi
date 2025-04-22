<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Investasi;

class InvestmentOportunity extends Controller
{
    public function index()
    {
        $investasi = Investasi::orderBy('invest_id','desc')->paginate(8);
        return view('investment-oportunity', compact('investasi'));
    }

    public function show($slug)
    {
        $invest = Investasi::all();
        $investasi = Investasi::where('slug', $slug)->first();
        return view('investment-oportunity-detail', compact('investasi', 'invest'));
    }
}
