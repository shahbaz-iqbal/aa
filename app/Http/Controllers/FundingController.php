<?php

namespace App\Http\Controllers;

use App\Models\Funding;
use Illuminate\Http\Request;

class FundingController extends Controller
{
    public function index()
    {
        $response = Funding::all();
        return view('funding.funding', ['fundings' => $response]);
    }

    public function add_new()
    {
        return view('funding.add_new_funding');
    }
    public function insert(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $response = Funding::create($data);
        if ($response) {
            return redirect('/admin/funding')->with('success', 'Your Funding has been created.');
        } else {
            return redirect('/admin/funding')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Funding::where('id', $id)->first();
        return view('funding/edit', ['id' => $id, 'funding' => $response]);
    }
    public function update(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $response = Funding::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/funding')->with('success', 'Your Funding has been Updated.');
        } else {
            return redirect('/admin/funding')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Funding::where('id', '=', $id)->delete();
        return redirect('admin/funding');
    }
}
