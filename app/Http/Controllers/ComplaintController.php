<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complain = Complaint::first();
        return view('complaint_procedure', ['complain' => $complain]);
    }
    public function update(Request $request)
    {
        $data = [
            'description' => $request->description,
        ];
        $response = Complaint::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/complaint_procedure')->with('success', 'Your Complaint has been Updated.');
        } else {
            return redirect('/admin/complaint_procedure')->with('error', 'Something Went Wrong');
        }
    }
}
