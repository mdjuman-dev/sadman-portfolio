<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Skill;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

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
        return view('frontend.project');
    }
    function blogDatails()
    {
        return view('frontend.blog-detail');
    }
    function serviceDatails()
    {
        return view('frontend.service-detail');
    }
    function projectDatails()
    {
        return view('frontend.project-detail');
    }
}
