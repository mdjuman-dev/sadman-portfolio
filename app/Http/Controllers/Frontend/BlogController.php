<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogView;
use App\Models\Category;
use App\Models\BlogComment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class BlogController extends Controller
{

    function blog()
    {
        $blogs = Blog::where('status', true)->with('category', 'comments', 'likes', 'views')->latest()->paginate(6);
        $categories = Category::where('status', true)->with('blog')->latest()->get();
        return view('frontend.blog', compact('blogs', 'categories'));
    }


    public function blogDetails($slug)
    {
        $blogDetails = Blog::where('slug', $slug)->where('status', true)->firstOrFail();

        $nextPost = Blog::where('id', '>', $blogDetails->id)->where('status', true)->orderBy('id')->first();
        $prevPost = Blog::where('id', '<', $blogDetails->id)->where('status', true)->orderBy('id', 'desc')->first();

        $categories = Category::where('status', true)->with('blog')->latest()->get();

        // অন্য ব্লগগুলো যেটা এই স্লাগ নয়
        $blogs = Blog::where('status', true)->with('category')->where('slug', '!=', $slug)->latest()->get();

        $comments = BlogComment::get();

        // View Count (Unique by IP)
        $ip = Request::ip();
        $alreadyViewed = BlogView::where('blog_id', $blogDetails->id)
            ->where('ip_address', $ip)
            ->exists();

        if (!$alreadyViewed) {
            BlogView::create([
                'blog_id' => $blogDetails->id,
                'ip_address' => $ip,
            ]);
        }
        $viewCount = BlogView::where('blog_id', $blogDetails->id)->count();
        return view('frontend.blog-details', compact(
            'blogDetails',
            'nextPost',
            'prevPost',
            'comments',
            'categories',
            'blogs',
            'viewCount'
        ));
    }


    function categoryByBlog($category)
    {
        $category = Category::where('status', true)->with('blog')->where('slug', $category)->paginate(6);
        $categories = Category::where('status', true)->with('blog')->latest()->get();
        $blogs = Blog::where('status', true)->with('category')->latest()->get();
        return view('frontend.category-by-blog', compact('categories', 'category', 'blogs'));
    }
}
