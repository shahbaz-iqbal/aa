<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index()
    {
        $Expertise = Expertise::all();
        return view('expertise/Expertise', ['expertise' => $Expertise]);
    }

    public function add_new()
    {
        return view('expertise/add_new_expertise');
    }

    public function insert(Request $request)
    {
        $data = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'discription' => $request->discription,
        ];
        $response = Expertise::create($data);
        if ($response) {
            return redirect('/admin/expertise')->with('success', 'Your Expertise has been created.');
        } else {
            return redirect('/admin/expertise')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Expertise::where('id', $id)->first();
        return view('expertise/edit', ['id' => $id, 'expertise' => $response]);
    }
    public function update(Request $request)
    {
   
        $data = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'discription' => $request->discription,
        ];
        $response = Expertise::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/expertise')->with('success', 'Your Expertise has been Updated.');
        } else {
            return redirect('/admin/expertise')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Expertise::where('id', '=', $id)->delete();
        return redirect('admin/expertise');
    }
}
