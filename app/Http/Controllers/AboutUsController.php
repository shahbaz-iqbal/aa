<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = About::first();
    
        return view('about.about_us', ['about' => $about]);
    }
    public function update(Request $request)
    {

        $data = [
            'discription' => $request->discription,
        ];
        $response = About::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/about_us')->with('success', 'Record Updated Successfully.');
        } else {
            return redirect('/admin/about_us')->with('error', 'Something Went Wrong');
        }
    }
}
