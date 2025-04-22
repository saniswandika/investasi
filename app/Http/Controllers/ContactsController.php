<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactsController extends Controller
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
        $contact = Contacts::all();
        return view('backend.contact.index', compact('contact'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'telp' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contacts();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->telp = $request->telp;
        $contact->message = $request->message;
        $contact->ip = $request->ip();

        $contact->save();

        Alert::success('Success', 'Thank you for contact us!');
        return back();
    }

}
