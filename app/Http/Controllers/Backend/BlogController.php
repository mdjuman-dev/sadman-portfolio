<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function index($id = null)
    {
        $editBlog = null;
        if ($id) {
            $editBlog = Blog::findOrFail($id);
        }
        $categories = Category::get();
        return view('backend.blog.index', compact('categories', 'editBlog'));
    }

    function allBlog()
    {
        $blogs = Blog::with('category')->get();
        return view('backend.blog.all-blog', compact('blogs'));
    }
    function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => $id ? 'nullable|image|mimes:jpeg,png,jpg,webp' : 'required|image|mimes:jpeg,png,jpg,webp',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $blog = Blog::findOrNew($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title); // Slug generate
        $blog->category_id = $request->category_id;
        $blog->content = $request->content;
        $blog->meta_title = $request->meta_title;
        $blog->meta_keyword = $request->meta_keyword;
        $blog->meta_description = $request->meta_description;

        // Image upload

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $image = $request->file('image');
            $imageName = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('blogs', $imageName, 'public');
            $blog->image = $imagePath;
        }


        $blog->save();

        $msg = $id ? 'Blog updated successfully.' : 'Blog created successfully.';
        return redirect()->route('blog.index')->with('success', $msg);
    }

    function delete($id)
    {
        $blog = Blog::findOrFail($id);
        // Delete main image
        if (Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
