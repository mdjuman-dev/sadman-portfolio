<?php

namespace App\Http\Controllers\Backend;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    function index()
    {
        $skills = Skill::all();
        return view('backend.skill.index', compact('skills'));
    }

    function create()
    {
        return view('backend.skill.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:50',
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->category = $request->category;
        $skill->duration = $request->duration;
        $skill->delay = $request->delay;
        $skill->save();

        return redirect()->route('skill.index')->with('success', 'Skill created successfully.');
    }

    function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('backend.skill.edit', compact('skill'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:50',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->category = $request->category;
        $skill->duration = $request->duration;
        $skill->delay = $request->delay;
        $skill->status = $request->status ?? 1;
        $skill->save();

        return redirect()->route('skill.index')->with('success', 'Skill updated successfully.');
    }
    function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skill.index')->with('success', 'Skill deleted successfully.');
    }
}
