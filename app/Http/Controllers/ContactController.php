<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }


    public function add_new()
    {
        return view('add_new_contact');
    }
}
