<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function index()
    {
        return view('backend.banner.index');
    }

    function createOrUpdate(Request $request)
    {
        dd($request->all());

        $request->validate([
            "name" => "required",
            "about" => "required",
            "text_one" => "required",
            "text_two" => "required",
            "image" => "mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        $banner = new Banner();
        $banner->name = $request->name;
        $banner->about = $request->about;
        $banner->text_one = $request->text_one;
        $banner->text_two = $request->text_two;
        $banner->cta_text = $request->cta_text;
        $banner->cta_link = $request->cta_link;
        $banner->status = $request->status ? true : false;
        $banner->image = $request->
        $banner->save();
        return redirect()->back()->with('success', 'Banner created successfully');

    }
}
