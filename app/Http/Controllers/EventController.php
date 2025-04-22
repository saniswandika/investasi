<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Banner;
use Lang;

class EventController extends Controller
{
    public function home()
    {
        $banner = Banner::where('menu', '=', 'event')->first();
        if (Lang::locale() === 'id') {
            $agenda = Agenda::where('isBahasa', 0)
                ->where('isActive', 1)
                ->orderBy('eventDate', 'desc')
                ->get();

            return view('newpage.event', compact('agenda', 'banner'));
        } else {
            $agenda = Agenda::where('isBahasa', 1)
                ->where('isActive', 1)
                ->orderBy('eventDate', 'desc')
                ->get();

            return view('newpage.event', compact('agenda', 'banner'));
        }

    }

    public function show($slug)
    {
        $agenda = Agenda::where('slug', '=', $slug)->first();

        return view('newpage.event-detail', compact('agenda'));
    }

    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
