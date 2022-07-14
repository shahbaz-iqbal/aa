<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Cv;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $response = Team::all();
        return view('team.index', ['team' => $response]);
    }

    public function add_new()
    {
        return view('team.add');
    }

    public function insert(Request $request)
    {
        if (!empty($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
        } else {
            $imageName = '';
        }
        $data = [
            'title' => $request->title,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $imageName
        ];
        $response = Team::create($data);
        if ($response) {
            return redirect('/admin/team')->with('success', 'Your team has been created.');
        } else {
            return redirect('/admin/team')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Team::where('id', $id)->first();
        return view('team/edit', ['id' => $id, 'team' => $response]);
    }
    public function update(Request $request)
    {

        if (!empty($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
        } else {
            $imageName = $request->old_image;
        }
        $data = [
            'title' => $request->title,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $imageName
        ];
        $response = Team::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/team')->with('success', 'Your team has been Updated.');
        } else {
            return redirect('/admin/team')->with('error', 'Something Went Wrong');
        }
    }

    // teams


    public function destroy($id)
    {
        Team::where('id', '=', $id)->delete();
        return redirect('admin/team');
    }

    public function upload_cv($id)
    {
        $response = Cv::where('user_id', $id)->first();
        return view('team/cv_add', ['id' => $id, 'cv' => $response]);
    }
    function replace_extension($filename, $new_extension)
    {
        $info = pathinfo($filename);
        return $info['filename'] . '.' . $new_extension;
    }
    public function upload_cv_post(Request $request)
    {

        if (!empty($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
        } else {
            $imageName = $request->old_file;
        }
        $data = [
            'pdf' => $imageName,
        ];
        $response = Cv::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/team')->with('success', 'Your Cv has been Updated.');
        } else {
            return redirect('/admin/team')->with('error', 'Something Went Wrong');
        }
    }
}
