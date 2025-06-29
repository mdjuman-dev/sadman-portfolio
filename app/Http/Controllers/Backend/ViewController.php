<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    function dashboard()
    {
        return view('backend.dashboard');
    }
}
