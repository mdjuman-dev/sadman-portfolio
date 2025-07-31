<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    function index()
    {
        $settings = Setting::first();
        return view('backend.setting.index', compact('settings'));
    }

    public function updateGeneral(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp',
            'favicon' => 'nullable|image|mimes:ico,png,webp',
        ]);

        $settings = Setting::firstOrNew(); // update or create

        $settings->name = $request->name;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->facebook = $request->facebook;
        $settings->linkedin = $request->linkedin;
        $settings->instagram = $request->instagram;
        $settings->twitter = $request->twitter;
        $settings->address = $request->address;

        // Upload logo
        if ($request->hasFile('logo')) {
            if ($settings->logo && Storage::disk('public')->exists($settings->logo)) {
                Storage::disk('public')->delete($settings->logo);
            }

            $logoName = uniqid('logo_', true) . '.' . $request->file('logo')->getClientOriginalExtension();
            $settings->logo = $request->file('logo')->storeAs('setting', $logoName, 'public');
        }

        // Upload favicon
        if ($request->hasFile('favicon')) {
            if ($settings->favicon && Storage::disk('public')->exists($settings->favicon)) {
                Storage::disk('public')->delete($settings->favicon);
            }

            $faviconName = uniqid('favicon_', true) . '.' . $request->file('favicon')->getClientOriginalExtension();
            $settings->favicon = $request->file('favicon')->storeAs('setting', $faviconName, 'public');
        }
        $settings->save();
        return back()->with('success', 'General settings updated successfully.');
    }

    public function updateSeo(Request $request)
    {
        $request->validate([
            'meta_title' => 'string',
            'meta_description' => 'string',
            'meta_tags' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $settings = Setting::firstOrNew();

        $settings->meta_title = $request->meta_title;
        $settings->meta_description = $request->meta_description;
        $settings->meta_tags = $request->meta_tags;
        $settings->meta_keywords = $request->meta_keywords;
        $settings->save();

        return back()->with('success', 'SEO settings updated successfully.');
    }

    public function updateTracking(Request $request)
    {
        $request->validate([
            'pixel_code' => 'nullable|string',
            'gtm_code' => 'nullable|string',
        ]);

        $settings = Setting::firstOrNew();

        $settings->pixel_code = $request->pixel_code;
        $settings->gtm_code = $request->gtm_code;
        $settings->save();
        return back()->with('success', 'Tracking codes updated successfully.');
    }
}
