<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    public function dashboard()
    {
        $slider = Slider::count();
        $Post = Post::count();
        $User = User::count();

        return view('dashboard-eCommerce', ['slider' => $slider, 'post' => $Post, 'user' => $User]);
    }
    public function index()
    {
        $slider = Slider::all();
        return view('slider/slider', ['slider' => $slider]);
    }

    public function add()
    {
        return view('slider.add_new_slider');
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
            'sub_title' => $request->sub_title,
            'image' => $imageName,
        ];
        $response = Slider::create($data);
        if ($response) {
            return redirect('/admin/slider')->with('success', 'Your Slider has been created.');
        } else {
            return redirect('/admin/slider')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Slider::where('id', $id)->first();
        return view('slider/edit', ['id' => $id, 'slider' => $response]);
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
            'sub_title' => $request->sub_title,
            'image' => $imageName,
        ];
        $response = Slider::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/slider')->with('success', 'Your Slider has been Updated.');
        } else {
            return redirect('/admin/slider')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Slider::where('id', '=', $id)->delete();
        return redirect('admin/slider');
    }
}
