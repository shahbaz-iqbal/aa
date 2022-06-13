<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('slider');
    }

    public function add_new_slider()
    {
        return view('add_new_slider');

    }

}
