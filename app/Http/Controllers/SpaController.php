<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Skill;
use App\Contact;

class SpaController extends Controller
{
    public function index() {
        $skills = Skill::orderBy('position')->get();
        $works = Work::all();
        $contact = Contact::first();
        return view('vue', compact('skills', 'works', 'contact'));
    }
}
