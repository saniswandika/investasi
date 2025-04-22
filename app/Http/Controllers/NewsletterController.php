<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Alert;

class NewsletterController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user()->role;
            if ($this->user == 'member usaha'){
                abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $newsletter = newsletter::all();
        return view('backend.newsletter.index', compact('newsletter'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|min:4|max:50|unique:newsletter',
        ]);

        $newsletter = new newsletter;
        $newsletter->email = $request->email;
        $newsletter->ip = $request->ip();
        $newsletter->save();

        //Alert::success('Success', 'Thanks for joining the newsletter!');
        Alert::toast('Thanks for joining the newsletter!', 'success');
        return back();
    }

}
