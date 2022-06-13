<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }

    public function add_new()
    {
        return view('add_new_category');
    }
}
