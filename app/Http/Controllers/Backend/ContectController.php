<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContectController extends Controller
{
    function index()
    {
        $contects = Contact::latest()->paginate(12);
        return view('backend.contect.all-contect', compact('contects'));
    }
    function view($id)
    {
        $viewContect = Contact::findOrFail($id);
        return view('backend.contect.view', compact('viewContect'));
    }

    function delete($id)
    {
        Contact::findOrFail($id)->delete();
        return back()->with('success', 'Client message delete successfully!');
    }
}
