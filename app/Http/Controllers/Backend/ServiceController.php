<?php

namespace App\Http\Controllers\Backend;

use App\Models\Servics;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::get();
        return view('backend.service.index', compact('categories'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $baseSlug = Str::slug($request->name);
        $slug = $baseSlug;
        $i = 1;

        while (
            Servics::where('slug', $slug)
            ->when($id, fn($q) => $q->where('id', '!=', $id)) 
            ->exists()
        ) {
            $slug = $baseSlug . '-' . $i++;
        }
        //! data not saving
        //! check names
        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->description,
            'status' => $request->has('status'),
            'slug' => $slug,
        ];
        dd($data);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid('service_') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $imageName);
            $data['image'] = 'uploads/services/' . $imageName;
        }

        if ($id) {
            $service = Servics::findOrFail($id);

            // Delete old image if new uploaded
            if ($request->hasFile('image') && $service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $service->update($data);
        } else {
            $service = Servics::create($data);
        }

        return redirect()->route('service.index')
            ->with('success', $id ? 'Service updated successfully.' : 'Service created successfully.');
    }
}
