<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $response = Career::all();
        return view('career.career', ['career' => $response]);
    }

    public function add_new()
    {
        return view('career.add_new_career');
    }

    public function insert(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $response = Career::create($data);
        if ($response) {
            return redirect('/admin/career')->with('success', 'Your Career has been created.');
        } else {
            return redirect('/admin/career')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Career::where('id', $id)->first();
        return view('career/edit', ['id' => $id, 'career' => $response]);
    }
    public function update(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $response = Career::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/career')->with('success', 'Your Career has been Updated.');
        } else {
            return redirect('/admin/career')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Career::where('id', '=', $id)->delete();
        return redirect('admin/career');
    }
}
