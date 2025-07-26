<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class BlogController extends Controller
{

    function blog()
    {
        $blogs = Blog::where('status', true)->with('category', 'comments')->paginate(1);
        $categories = Category::where('status', true)->with('blog')->latest()->get();
        return view('frontend.blog', compact('blogs', 'categories'));
    }
    function blogDetails($slug)
    {
        $blogDetails = Blog::where('slug', $slug)->where('status', true)->firstOrFail();

        // Next blog (by ID or created_at)
        $nextPost = Blog::where('id', '>', $blogDetails->id)
            ->where('status', true)
            ->orderBy('id')
            ->first();

        // Previous blog
        $prevPost = Blog::where('id', '<', $blogDetails->id)
            ->where('status', true)
            ->orderBy('id', 'desc')
            ->first();
        $comments = BlogComment::get();
        $categories = Category::where('status', true)->with('blog')->latest()->get();
        return view('frontend.blog-details', compact('blogDetails', 'nextPost', 'prevPost', 'comments', 'categories'));
    }

    function categoryByBlog($category)
    {
        $category = Category::where('status', true)->with('blog')->where('slug', $category)->paginate(6);
        $categories = Category::where('status', true)->with('blog')->latest()->get();
        return view('frontend.category-by-blog', compact('categories', 'category'));
    }
}
