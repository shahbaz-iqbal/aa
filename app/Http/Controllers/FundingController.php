<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundingController extends Controller
{
   public function index()
   {
       return view('funding');
   }

   public function add_new()
   {
       return view('add_new_funding');
   }
}
