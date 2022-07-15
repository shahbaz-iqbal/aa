<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PracticeCategory;
use App\Models\Cv;
use App\Models\CvDescription;
use App\Models\CvPractice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoryController extends Controller
{
    public function index()
    {
        $response = Category::all();
        return view('blog.category.category', ['response' => $response]);
    }

    public function add_new()
    {
        return view('blog.category.add_new_category');
    }
    public function insert(Request $request)
    {
        $data = [
            'title' => $request->title,
        ];
        $response = Category::create($data);
        if ($response) {
            return redirect('/admin/category')->with('success', 'Your Category has been created.');
        } else {
            return redirect('/admin/category')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $response = Category::where('id', $id)->first();
        return view('blog/category/edit', ['id' => $id, 'category' => $response]);
    }
    public function update(Request $request)
    {
        $data = [
            'title' => $request->title,
        ];
        $response = Category::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/category')->with('success', 'Your Category has been Updated.');
        } else {
            return redirect('/admin/category')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Category::where('id', '=', $id)->delete();
        return redirect('admin/category');
    }

    // Cv Practice Category


    public function cv_category_index()
    {
        $response = PracticeCategory::all();
        return view('category.category', ['response' => $response]);
    }

    public function cv_category_add_new()
    {
        return view('category.add_new_category');
    }

    public function cv_category_insert(Request $request)
    {
        $data = [
            'name' => $request->title,
        ];
        $response = PracticeCategory::create($data);
        if ($response) {
            return redirect('/admin/cv_category_category')->with('success', 'Your Practice Category has been created.');
        } else {
            return redirect('/admin/cv_category_category')->with('error', 'Something Went Wrong');
        }
    }

    public function cv_category_edit($id)
    {
        $response = PracticeCategory::where('id', $id)->first();
        return view('category/edit', ['id' => $id, 'category' => $response]);
    }

    public function cv_category_update(Request $request)
    {
        $data = [
            'name' => $request->title,
        ];
        $response = PracticeCategory::where('id', $request->id)->update($data);
        if ($response) {
            return redirect('/admin/cv_category_category')->with('success', 'Your Practice Category has been Updated.');
        } else {
            return redirect('/admin/cv_category_category')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function cv_category_destroy($id)
    {
        PracticeCategory::where('id', '=', $id)->delete();
        return redirect('admin/cv_category_category');
    }

    public function cv($id)
    {
        $cv = Cv::where('user_id', $id)->first();


        if ($cv) {
            $cv_desc = CvDescription::where('cv_id', $cv->id)->get();
        } else {
            $cv_desc = "";
        }
        if ($cv) {
            $cv_practice = CvPractice::with('category')->where('cv_id', $cv->id)->get();
        } else {
            $cv_practice = "";
        }
        return view('category.update_cv', ['categorys' => PracticeCategory::all(), 'user_id' => $id, 'cv_tbl' => $cv, 'cv_desc_tbl' => $cv_desc, 'cv_practice_tbl' => $cv_practice]);
    }
    public function get_category($id)
    {
        $val = PracticeCategory::where('id', '=', $id)->first();
        return json_encode($val);
    }

    public function update_cv(Request $request)
    {
        if ($request->id) {
            Cv::where('id', $request->id)->delete();
            CvDescription::where('cv_id', $request->id)->delete();
            CvPractice::where('cv_id', $request->id)->delete();
        }

        if (!empty($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
        } else {
            $imageName = $request->old_file;
        }
        $cv_tbl = [
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'publication' => $request->publication,
            'membership' => $request->membership,
            'quotes' => $request->quotes,
            'image' => $imageName,
        ];
        $cv_id = Cv::insertGetId($cv_tbl);
        //Insert cv_short_description
        foreach ($request->field as $field_val) {
            $cv_description_tbl = [
                'cv_id' => $cv_id,
                'description' => $field_val,
            ];
            CvDescription::create($cv_description_tbl);
        }
        //Insert cv_short_description
        foreach ($request->practice_category_id as $practice_category_key => $practice_category_val) {
            $cv_practice = [
                'cv_id' => $cv_id,
                'practice_category_id' => $practice_category_val,
                'description' => $request->practices[$practice_category_key],
            ];
            CvPractice::create($cv_practice);
        }
        return redirect('/admin/team')->with('success', 'Your Cv has been Updated.');
    }
    // Cv Practice Category

}
