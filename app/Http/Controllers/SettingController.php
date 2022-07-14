<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('setting', ['setting' => $setting]);
    }
    public function update(Request $request)
    {
        if (!empty($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
        } else {
            $imageName = $request->old_image;
        }
        if (!empty($request->file1)) {
            $imageName1 = time() . '1.' . $request->file1->extension();
            $request->file1->move(public_path('/images'), $imageName1);
        } else {
            $imageName1 = $request->old_image1;
        }
        $data = [
            // 'title' => $request->title,
            // 'sub_title' => $request->sub_title,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkdin' => $request->linkdin,
            'trustpilot' => $request->trustpilot,
            'image' => $imageName,
            'footer_image' => $imageName1,
        ];
        $response = Setting::where('id', 1)->update($data);
        if ($response) {
            return redirect('/admin/setting')->with('success', 'Your Setting has been Updated.');
        } else {
            return redirect('/admin/setting')->with('error', 'Something Went Wrong');
        }
    }
}
