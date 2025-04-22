<?php

namespace App\Http\Controllers;

class HowWeCanHelpController extends Controller
{
    public function home()
    {

        return view('newpage.how-we-can-help');

    }
    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
