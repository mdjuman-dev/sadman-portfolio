<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index($id = null)
    {
        $editCategory = null;
        if ($id) {
            $editCategory = Category::findOrFail($id);
        }
        $categories = Category::get();
        return view('backend.category.index', compact('editCategory', 'categories'));
    }

    function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::findOrNew($id);
        $category->name = $request->name;
        if ($id) {
            $category->status = $request->has('status');
        }
        $category->save();
        $msg = $id ? 'Category Update Successfully' : 'Category Create Successfully';
        return redirect()->route('category.index')->with('success', $msg);
    }

    function delete($id)
    {
        Category::findOrFail($id)->delete();
        return back()->with('success', 'Category Delete Successfully');
    }
}
