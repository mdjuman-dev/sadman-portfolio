<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use App\Models\technology;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    function index($id = null)
    {
        $editProject = null;
        if ($id) {
            $editProject = Project::findOrFail($id);
        }

        $technologies = technology::where('status', true)->get();
        return view('backend.projects.index', compact('technologies', 'editProject'));
    }
    function allProject()
    {
        $Projects = Project::latest()->paginate(6);
        return view('backend.projects.all-project', compact("Projects"));
    }
    function view($slug)
    {

        $project = Project::where('slug', $slug)->first();
        return view('backend.projects.view', compact('project'));
    }

    function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'image' => $id ? 'nullable|image|mimes:jpeg,png,jpg,webp' : 'required|image|mimes:jpeg,png,jpg,webp',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:100',
            'project_link' => 'nullable|url|max:255',
            'project_date' => 'nullable|string|max:100',
            'technology' => 'nullable|array|min:1',
            'technology.*' => 'string|max:100',
            'meta_title' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $project = Project::findOrNew($id);
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->content = $request->content;
        $project->author = $request->author;
        $project->live_link = $request->project_link;
        $project->project_date = $request->project_date;
        $project->technology = $request->technology;
        if ($id) {
            $project->status = $request->has('status');
        }
        $project->meta_title = $request->meta_title;
        $project->meta_keyword = $request->meta_keyword;
        $project->meta_description = $request->meta_description;

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $image = $request->file('image');
            $imageName = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('project', $imageName, 'public');
            $project->image = $imagePath;
        }

        $project->save();
        $msg = $id ? "Project Update Successfully" : "Project Added Successfully";
        return redirect()->route('project.allProject')->with('success', $msg);
    }

    function delete($id)
    {
        $project = Project::findOrFail($id);
        // Delete main image
        if (Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        return redirect()->route('project.allProject')->with('success', 'Project deleted successfully.');
    }
}
