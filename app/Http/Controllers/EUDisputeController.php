<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EUDisputeController extends Controller
{
    public function index()
    {
       return view('eu-dispute');
    }
}
