<?php

namespace App\Http\Controllers;
use App\Models\Cookie;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function index()
    {
        $complain = Cookie::first();
        return view('cookie_policy', ['cookie_policy' => $complain]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Cookie::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/cookie_policy')->with('success', 'Your Cookie Policy has been Updated.');
        } else {
            return redirect('/admin/cookie_policy')->with('error', 'Something Went Wrong');
        }
    }
}
