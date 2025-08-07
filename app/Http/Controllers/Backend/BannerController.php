<?php

namespace App\Http\Controllers\backend;

use App\Models\Banner;
use Illuminate\Support\Str;
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
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'nullable|string',
            'status' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'profession' => 'nullable|array',
            'profession.*' => 'nullable|string|max:255',
        ]);

        $banner = Banner::firstOrNew();
        $banner->name = $request->name;
        $banner->about = $request->about;
        $banner->status = $request->status ? true : false;
        $banner->profession = json_encode($request->profession);
        if ($request->hasFile('image')) {
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('banners', $imageName, 'public');
            $banner->image = $imagePath;
        }
        $banner->save();

        return back()->with('success', 'Banner saved successfully.');
    }
}
