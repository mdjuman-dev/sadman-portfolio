<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ServiceCategoryController extends Controller
{
    function index($id = null)
    {
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
            'name' => 'unique:service_categories,slug,' . $id,
        ]);
        $serviceCategory = ServiceCategory::findOrNew($id);
        $serviceCategory->name = $request->name;
        $serviceCategory->slug = $request->slug;
        if ($id) {
            $serviceCategory->status = $request->has('status');
        }
        $serviceCategory->save();
        $msg = $id ? 'Service Category updated successfully.' : 'Service Category created successfully.';
        return redirect()->route('service.category.index')->with('success', $msg);
    }

    function delete($id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $serviceCategory->delete();
        return redirect()->route('service.category.index')->with('success', 'Service Category deleted successfully.');
    }
}
