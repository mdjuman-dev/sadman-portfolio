<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Skill;
use App\Models\Education;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    function home()
    {
        $skills = Skill::select('id', 'name', 'percentage', 'category', 'duration', 'delay', 'status')->where('status', true)->get();
        $educations = Education::select('id', 'degree', 'institution', 'start_date', 'end_date', 'description')->where('status', true)->get();
        $blogs = Blog::where('status', true)->select('title', 'image', 'created_at', 'slug')->limit(3)->get();
        $projects = Project::where('status', true)->select('title', 'image', 'slug', 'category')->limit(4)->get();
        $services = Service::where('status', true)->select('id', 'title', 'content', 'slug')->limit(3)->get();
        $banner = Banner::select('name', 'id', 'image', 'about', 'profession')->first();

        return view('frontend.home', compact(
            'skills',
            'educations',
            'blogs',
            'banner',
            'projects',
            'services'
        ));
    }
}
