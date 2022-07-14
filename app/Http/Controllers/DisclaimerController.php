<?php

namespace App\Http\Controllers;
use App\Models\Disclaimer;
use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function index()
    {
        $complain = Disclaimer::first();
        return view('disclaimer', ['disclaimer' => $complain]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Disclaimer::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/disclaimer')->with('success', 'Your Disclaimer has been Updated.');
        } else {
            return redirect('/admin/disclaimer')->with('error', 'Something Went Wrong');
        }
    }
}
