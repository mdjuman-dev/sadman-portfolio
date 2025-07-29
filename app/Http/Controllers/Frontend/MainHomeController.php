<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Skill;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Project;

class MainHomeController extends Controller
{

    function about()
    {
        $skills = Skill::select('id', 'name', 'percentage', 'category', 'duration', 'delay', 'status')->where('status', true)->get();
        return view('frontend.about', compact('skills'));
    }
    function services()
    {
        return view('frontend.services');
    }

    function contact()
    {
        return view('frontend.contact', compact('contects'));
    }
    function project()
    {
        $projects = Project::where('status', true)->latest()->paginate(6);
        return view('frontend.project', compact('projects'));
    }
    function blogDatails()
    {
        return view('frontend.blog-detail');
    }
    function serviceDatails()
    {
        return view('frontend.service-detail');
    }
    function projectDatails($slug)
    {
        $project = Project::where('status', true)->orWhere('slug', $slug)->firstOrFail();
        return view('frontend.project-detail', compact('project'));
    }
}
