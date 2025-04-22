<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs; // Import the ContactUs model

class ContactUsController extends Controller
{
    // Display a form to create a new contact record
    public function create()
    {
        return view('contactus.create');
    }

    // Store a new contact record in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'company' => 'required',
            'country' => 'required',
            'project_interest' => 'required',
        ]);

        $contact = new ContactUs;
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->position = $validatedData['position'];
        $contact->company = $validatedData['company'];
        $contact->country = $validatedData['country'];
        $contact->project_interest = $validatedData['project_interest'];
        $contact->save();

        return redirect()->route('contactus.create')->with('success', 'Contact record created successfully.');
    }
}
