<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index($id = null)
    {
        $editService = null;
        if ($id) {
            $editService = Service::findOrFail($id);
        }
        $services = Service::latest()->get();
        $categories = ServiceCategory::latest()->get();
        return view('backend.service.index', compact('categories', 'editService', 'services'));
    }
    function allServices()
    {
        $services = Service::with('serviceCategory')->latest()->get();
        return view('backend.service.all', compact('services'));
    }
    function view($slug)
    {
        $viewService = Service::where('slug', $slug)->with('serviceCategory')->first();
        return view('backend.service.view', compact('viewService'));
    }
    public function storeOrUpdate(Request $request, $id = null)
    {

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => $id ? 'nullable|image' : 'required|image',
        ]);

        $serviceSlug = Str::slug(Str::words($request->title, 10, ''));

        $service = Service::findOrNew($id);
        $service->title = $request->title;
        $service->slug = $serviceSlug;
        $service->service_category_id = $request->category_id;
        $service->content = $request->description;
        if ($id) {
            $service->status = $request->has('status');
        }

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $image = $request->file('image');
            $imageName = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('service', $imageName, 'public');
            $service->image = $imagePath;
        }
        $service->save();
        $msg = $id ? 'Service updated successfully.' : 'Service created successfully.';
        return redirect()->route('service.allServices')->with('success', $msg);
    }
    function serviceShow($slug)
    {
        $service = Service::where('slug', $slug)->with('serviceCategory')->firstOrFail();
        $serviceCategory = ServiceCategory::get();
        return view('frontend.service-detail', compact('service', 'serviceCategory'));
    }
}
