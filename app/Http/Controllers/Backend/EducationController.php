<?php

namespace App\Http\Controllers\Backend;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    function index()
    {
        $educations = Education::get();
        return view('backend.education.index', compact('educations'));
    }

    function create()
    {
        return view('backend.education.add', ['education' => null]);
    }

    function store(Request $request)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
        ]);

        $education = new Education();
        $education->degree = $request->degree;
        $education->institution = $request->institution;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->description = $request->description;
        $education->save();

        return redirect()->route('education.index')->with('success', 'Education added successfully.');
    }

    function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('backend.education.add', compact('education'));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
        ]);

        $education = Education::findOrFail($id);
        $education->degree = $request->degree;
        $education->institution = $request->institution;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->description = $request->description;
        $education->status = $request->has('status') ? true : false;
        $education->save();

        return redirect()->route('education.index')->with('success', 'Education updated successfully.');
    }

    function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Education deleted successfully.');
    }
}
