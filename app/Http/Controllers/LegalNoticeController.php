<?php

namespace App\Http\Controllers;
use App\Models\Legal;
use Illuminate\Http\Request;

class LegalNoticeController extends Controller
{
     public function index()
     {
      $complain = Legal::first();
        return view('legal_notice', ['legal_notice' => $complain]);
     }
     public function update(Request $request)
     {
         $data = [
             'description' => $request->description,
         ];
         $response = Legal::where('id', 1)->update($data);
         if ($response) {
             return redirect('/admin/legal_notice')->with('success', 'Your legal Notice has been Updated.');
         } else {
             return redirect('/admin/legal_notice')->with('error', 'Something Went Wrong');
         }
     }
}
