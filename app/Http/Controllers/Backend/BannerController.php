<?php

namespace App\Http\Controllers\backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    function index()
    {
        $banner = Banner::first();
        return view('backend.banner.index', compact('banner'));
    }

    public function createOrUpdate(Request $request)
    {
        $request->validate([
            "name" => "required",
            "about" => "required",
        ]);
    
        $banner = Banner::first();
        if (!$banner) {
            $banner = new Banner();
        }
    
        $banner->name = $request->name;
        $banner->about = $request->about;
        $banner->text_one = $request->text_one;
        $banner->text_two = $request->text_two;
        $banner->cta_text = $request->cta_text;
        $banner->cta_link = $request->cta_link;
        $banner->status = $request->status ? true : false;
    
        if ($request->hasFile('image')) {

            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
    
            $imagePath = $request->file('image')->store('banners', 'public');
            $banner->image = $imagePath;
        }
    
        $banner->save();
    
        return redirect()->back()->with('success', 'Banner saved successfully!');
    }
}
