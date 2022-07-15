<?php

namespace App\Http\Controllers;
use App\Models\Accessibilty;
use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function index()
    {
        $complain = Accessibilty::first();
        return view('accessibility', ['accessibility' => $complain]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Accessibilty::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/accessibility')->with('success', 'Your Accessibility has been Updated.');
        } else {
            return redirect('/admin/accessibility')->with('error', 'Something Went Wrong');
        }
    }
}
