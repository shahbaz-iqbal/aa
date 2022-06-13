<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index()
    {
        return view('Expertise');
    }

    public function add_new()
    {
        return view('add_new_expertise');
    }
}
