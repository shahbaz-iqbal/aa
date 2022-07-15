<?php

namespace App\Http\Controllers;
use App\Models\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $complain = Terms::first();
        return view('terms', ['terms' => $complain]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Terms::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/terms')->with('success', 'Your Terms has been Updated.');
        } else {
            return redirect('/admin/terms')->with('error', 'Something Went Wrong');
        }
    }
}
