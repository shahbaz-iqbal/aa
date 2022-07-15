<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $response = Post::all();
        
        return view('blog.blog', ['blog' => $response]);
    }

    public function add_new()
    {
        $response = Category::all();
        return view('blog.add_new_post', ['category' => $response]);
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
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ];
        $response = Post::create($data);
        if ($response) {
            return redirect('/admin/blog')->with('success', 'Your blog has been created.');
        } else {
            return redirect('/admin/blog')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Post::where('id', $id)->first();
        $response_cat = Category::all();
        return view('blog/edit', ['id' => $id, 'blog' => $response, 'category' => $response_cat]);
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
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ];
        $response = Post::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/blog')->with('success', 'Your blog has been Updated.');
        } else {
            return redirect('/admin/blog')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Post::where('id', '=', $id)->delete();
        return redirect('admin/blog');
    }
}
