<?php

namespace Modules\DevelopmentProject\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\DevelopmentProject\Entities\Project;
use Modules\DevelopmentProject\Entities\ProjectPartner;

class ProjectPartnerController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id)
    {
        $project = Project::with('projectPartners')->where('id',$id)->first();
        return view('developmentproject::projectPartner.create',compact('project'));
    }

    public function store(Request $request)
    {
       $this->validate($request, [
        'title' => 'required|max:150',
        ]
    );
    try {
        $project = new ProjectPartner();
        $project->title = $request->title;
        $project->project_id = $request->project_id;
        $project->description = $request->description;
        $project->publish = $request->publish ? 1 : 0;
        $project->save();
        return redirect()->back()->with('success', 'Project created successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
    }

    public function edit($id)
    {
        $projectPartner = ProjectPartner::findOrFail($id);
        $project = Project::with('projectPartners')->where('id',$projectPartner->project_id)->first();
        return view('developmentproject::projectPartner.edit',compact('projectPartner','project'));
    }

    public function update(Request $request, $id)
    {
        $project = ProjectPartner::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',

        ]);
        try {
            $project->title = $request->title;
            $project->project_id = $request->project_id;
            $project->description = $request->description;
            $project->publish = $request->publish ? 1 : 0;
            $project->save();
            return redirect()->back()->with('success', 'project updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $project = ProjectPartner::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');
    }
}
