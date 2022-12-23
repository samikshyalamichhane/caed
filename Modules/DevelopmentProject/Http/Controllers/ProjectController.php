<?php

namespace Modules\DevelopmentProject\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\DevelopmentProject\Entities\Project;
use Modules\DevelopmentProject\Entities\ProjectCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $projects = Project::with('projectCategory')->orderBy('created_at', 'ASC')->get();
        return view('developmentproject::project.index',compact('projects'));
    }

    public function create()
    {
        $projectCategories = ProjectCategory::where('publish',1)->get();
        return view('developmentproject::project.create',compact('projectCategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'projectCategory_id' => 'required',
            'title' => 'required|max:150',
            ],
            [
            'projectCategory_id.required' => 'Project Category Title is Required',
            ]
        );
        try {
            $project = new Project();
            $project->title = $request->title;
            $project->projectCategory_id = $request->projectCategory_id;
            $project->description = $request->description;
            $project->meta_description = $request->meta_description;
            $project->meta_title = $request->meta_title;
            $project->keyword = $request->keyword;
            $project->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/projects', $filename);
                $project->image = $path;
            }
            if ($request->hasFile('bg_image')) {
                $file = $request->bg_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/projects', $filename);
                $project->bg_image = $path;
            }
            $project->save();
            return redirect()->route('project.index')->with('success', 'Project created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        $projectCategories = ProjectCategory::where('publish',1)->get();
        return view('developmentproject::project.edit', compact('projects','projectCategories'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',

        ]);
        try {
            $project->title = $request->title;
            $project->projectCategory_id = $request->projectCategory_id?$request->projectCategory_id:$project->projectCategory_id;
            $project->description = $request->description;
            $project->meta_description = $request->meta_description;
            $project->meta_title = $request->meta_title;
            $project->keyword = $request->keyword;
            $project->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/projects', $filename);
                $project->image = $path;
            }
            if ($request->hasFile('bg_image')) {
                $file = $request->bg_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/projects', $filename);
                $project->bg_image = $path;
            }
            $project->save();
            return redirect()->route('project.index')->with('success', 'project updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }
}
