<?php

namespace App\Http\Controllers;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $Privacy = Privacy::first();
        return view('privacy_policy',['privacy'=>$Privacy]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Privacy::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/privacy')->with('success', 'Your Privacy has been Updated.');
        } else {
            return redirect('/admin/privacy')->with('error', 'Something Went Wrong');
        }
    }
}
