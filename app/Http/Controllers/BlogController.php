<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function add_new()
    {
        return view('add_new_post');
    }
}
