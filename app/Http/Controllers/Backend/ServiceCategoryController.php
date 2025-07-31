<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ServiceCategoryController extends Controller
{
    function index($id = null){
        $categories = ServiceCategory::get();
        $editCategory = null;
        if ($id) {
            $editCategory = ServiceCategory::findOrFail($id);
        }
        return view('backend.service.category.index', compact('id', 'categories', 'editCategory'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $slug = $this->uniqueSlug($request->name, $id);
    
        $data = [
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->has('status'),
        ];
    
        if ($id) {
            $serviceCategory = ServiceCategory::findOrFail($id);
            $serviceCategory->update($data);
        } else {
            $serviceCategory = ServiceCategory::create(attributes: $data);
        }


    
        return redirect()->route('service.category.index')
            ->with('success', $id ? 'Service Category updated successfully.' : 'Service Category created successfully.');
    }
    

    function uniqueSlug($name, $id = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;
    
        while (ServiceCategory::where('slug', $slug)
            ->when($id, fn($q) => $q->where('id', '!=', $id))
            ->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
    
        return $slug;
    }

    function delete($id){
        $serviceCategory = ServiceCategory::findOrFail($id);
        $serviceCategory->delete();
        return redirect()->route('service.category.index')->with('success', 'Service Category deleted successfully.');
    }
}
