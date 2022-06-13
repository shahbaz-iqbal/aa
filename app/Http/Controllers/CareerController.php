<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('career');
    }

    public function add_new()
    {
        return view('add_new_career');
    }
}
