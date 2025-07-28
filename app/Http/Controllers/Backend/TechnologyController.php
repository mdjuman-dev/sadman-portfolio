<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    function index($id = null)
    {
        $editTech = null;
        if ($id) {
            $editTech = Technology::findOrFail($id);
        }
        $technologies = Technology::latest()->get();
        return view('backend.technology.index', compact('technologies', 'editTech'));
    }

    function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required|unique:technologies,name,' . $id,
        ]);

        $technology = technology::findOrNew($id);
        $technology->name = $request->name;
        if ($id) {
            $technology->status = $request->has('status');
        }
        $technology->save();
        $msg = $id ? "Technology Update Successfully!" : "Technology Added Successfully!";
        return redirect()->route('technology.index')->with('message', $msg);
    }

    function delete($id)
    {
        Technology::findOrFail($id)->delete();
        return redirect()->route('technology.index')->with('message', 'Technology delete successfully!');
    }
}
