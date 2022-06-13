<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalNoticeController extends Controller
{
     public function index()
     {
        return view('legal_notice');
     }
}
