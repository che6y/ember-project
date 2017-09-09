<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $contact=Contact::first();

        return view('edit-contact', compact('contact'));
    }

    public function update(Request $request)
    {
        $contact = Contact::first();

        $contact->email = $request->email;
        $contact->github = $request->github;
        $contact->codewars = $request->codewars;

        $contact->save();

        return redirect('/adminka');
    }
}
