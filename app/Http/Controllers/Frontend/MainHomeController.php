<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    function home()
    {
        return view('frontend.home');
    }
    function about()
    {
        return view('frontend.about');
    }
    function services()
    {
        return view('frontend.services');
    }
    function blog()
    {
        return view('frontend.blog');
    }
    function contact()
    {
        return view('frontend.contact');
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
