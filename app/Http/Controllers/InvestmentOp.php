<?php

namespace App\Http\Controllers;

use App\Investasi;
use App\WestJavaSectorManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Lang;

class InvestmentOp extends Controller
{
    public function home(Request $request)
    {
        if (Lang::locale() === 'id'){
            $investasi = Investasi::where('isBahasa', 0)
                                ->where(function ($query) {
                                    $query->where('fk_sector', '!=', 2)
                                        ->where('fk_sector', '!=', 3);
                                });

            if ($request->has('sector')) {
                $investasi->where('fk_sector', '=', $request->get('sector'));
            }
            
            $investasi = $investasi->orderBy('judul_investasi', 'asc')
                                ->paginate(6);
                                
            $investasi = json_encode($investasi);
            $investasi = json_decode($investasi);

            $sector = WestJavaSectorManagement::where('isBahasa', 0)
                                            ->where('slug', '!=', 'wjis-indonesia')
                                            ->orderBy('title', 'asc')
                                            ->get();

            return view('newpage.investment-op', compact('investasi', 'sector'));
        }else{
            $investasi = Investasi::where('isBahasa', 1)
                                ->where(function ($query) {
                                    $query->where('fk_sector', '!=', 2)
                                        ->where('fk_sector', '!=', 3);
                                });

            if ($request->has('sector')) {
                $investasi->where('fk_sector', '=', $request->get('sector'));
            }
            
            $investasi = $investasi->orderBy('judul_investasi', 'asc')
                                ->paginate(6);

            $investasi = json_encode($investasi);
            $investasi = json_decode($investasi);

            $sector = WestJavaSectorManagement::where('isBahasa', 1)
                                            ->where('slug', '!=', 'wjis-en')
                                            ->orderBy('title', 'asc')
                                            ->get();

            return view('newpage.investment-op', compact('investasi', 'sector'));
        }

    }

    public function map(Request $request)
    {
        if (Lang::locale() === 'id'){
            $investasi = Investasi::where('isBahasa', 0)
                                ->where(function ($query) {
                                    $query->where('fk_sector', '!=', 2)
                                        ->where('fk_sector', '!=', 3);
                                });

            if ($request->has('sector')) {
                $investasi->where('fk_sector', '=', $request->get('sector'));
            }
            
            $investasi = $investasi->orderBy('judul_investasi', 'asc')
                                ->paginate(6);
                                
            $investasi = json_encode($investasi);
            $investasi = json_decode($investasi);

            $sector = WestJavaSectorManagement::where('isBahasa', 0)
                                            ->where('slug', '!=', 'wjis-indonesia')
                                            ->orderBy('title', 'asc')
                                            ->get();

            return view('newpage.investment-op-map', compact('investasi', 'sector'));
        }else{
            $investasi = Investasi::where('isBahasa', 1)
                                ->where(function ($query) {
                                    $query->where('fk_sector', '!=', 2)
                                        ->where('fk_sector', '!=', 3);
                                });

            if ($request->has('sector')) {
                $investasi->where('fk_sector', '=', $request->get('sector'));
            }
            
            $investasi = $investasi->orderBy('judul_investasi', 'asc')
                                ->paginate(6);

            $investasi = json_encode($investasi);
            $investasi = json_decode($investasi);

            $sector = WestJavaSectorManagement::where('isBahasa', 1)
                                            ->where('slug', '!=', 'wjis-en')
                                            ->orderBy('title', 'asc')
                                            ->get();

            return view('newpage.investment-op-map', compact('investasi', 'sector'));
        }
    }
    public function show($id)
    {
        $investasi = Investasi::with('sector')->find($id);
        views($investasi)->record();

        $countView = views($investasi)->count();

        return view('newpage.investment-op-detail', compact(['investasi', 'countView']));
    }

    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
