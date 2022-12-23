<?php

namespace Modules\DevelopmentProject\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\DevelopmentProject\Entities\ProjectCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectCategoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $projectCategories = ProjectCategory::orderBy('created_at', 'ASC')->paginate(100);
        return view('developmentproject::projectCategory.index', compact('projectCategories'));
    }

    public function create()
    {
        return view('developmentproject::projectCategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $projectCategory = new ProjectCategory();
            $projectCategory->title = $request->title;
            $projectCategory->meta_description = $request->meta_description;
            $projectCategory->meta_title = $request->meta_title;
            $projectCategory->keyword = $request->keyword;
            $projectCategory->publish = $request->publish ? 1 : 0;
            $projectCategory->save();
            return redirect()->route('ProjectCategory.index')->with('success', 'ProjectCategory created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $projectCategories = ProjectCategory::findOrFail($id);
        return view('developmentproject::projectCategory.edit', compact('projectCategories'));
    }

    public function update(Request $request, $id)
    {
        $projectCategory = ProjectCategory::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $projectCategory->title = $request->title;
            $projectCategory->meta_description = $request->meta_description;
            $projectCategory->meta_title = $request->meta_title;
            $projectCategory->keyword = $request->keyword;
            $projectCategory->publish = $request->publish ? 1 : 0;
            $projectCategory->save();
            return redirect()->route('ProjectCategory.index')->with('success', 'projectCategory updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $projectCategory = ProjectCategory::findOrFail($id);
        $projectCategory->delete();
        return redirect()->route('ProjectCategory.index')->with('success', 'ProjectCategory deleted successfully');
    }
}
