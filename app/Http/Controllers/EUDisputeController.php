<?php

namespace App\Http\Controllers;
use App\Models\Dispute;
use Illuminate\Http\Request;

class EUDisputeController extends Controller
{
    public function index()
    {
        $complain = Dispute::first();
       return view('eu-dispute', ['eu_dispute' => $complain]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Dispute::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/eu_dispute')->with('success', 'Your EU Dispute has been Updated.');
        } else {
            return redirect('/admin/eu_dispute')->with('error', 'Something Went Wrong');
        }
    }
}
