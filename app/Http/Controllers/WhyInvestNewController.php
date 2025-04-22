<?php

namespace App\Http\Controllers;

use App\WhyInvest;
use Lang;

class WhyInvestNewController extends Controller
{
    public function home()
    {
        if (Lang::locale() === 'id'){
            $whyInvest = WhyInvest::where('isBahasa', '=', 0)->get();
        } else {
            $whyInvest = WhyInvest::where('isBahasa', '=', 1)->get();
        }

        return view('newpage.why-invest', compact('whyInvest'));

    }
    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
