<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index($id = null) {
        return view('backend.blog.index');
    }

    function allBlog() {
        return view('backend.blog.all-blog');
    }
}
