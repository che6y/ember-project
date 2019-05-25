<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Skill;
use App\Term;

class SpaController extends Controller
{
    public function index() {
        $skills = base64_encode(json_encode(Skill::orderBy('position')->get()));
        $works = base64_encode(json_encode(Work::all()));
        return view('vue', compact('skills', 'works'));
    }
}
