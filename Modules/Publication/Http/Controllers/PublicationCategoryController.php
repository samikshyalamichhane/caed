<?php

namespace Modules\Publication\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Publication\Entities\PublicationCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublicationCategoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $publicationCategories = PublicationCategory::orderBy('created_at', 'ASC')->paginate(100);
        return view('publication::category.index', compact('publicationCategories'));
    }

    public function create()
    {
        return view('publication::category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $publicationCategory = new PublicationCategory();
            $publicationCategory->title = $request->title;
            $publicationCategory->publish = $request->publish ? 1 : 0;
            $publicationCategory->save();
            return redirect()->route('publicationCategory.index')->with('success', 'Publication Category created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $publicationCategories = PublicationCategory::findOrFail($id);
        return view('publication::category.edit', compact('publicationCategories'));
    }

    public function update(Request $request, $id)
    {
        $publicationCategory = PublicationCategory::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $publicationCategory->title = $request->title;
            $publicationCategory->publish = $request->publish ? 1 : 0;
            $publicationCategory->save();
            return redirect()->route('publicationCategory.index')->with('success', 'Publication Category updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $publicationCategory = PublicationCategory::findOrFail($id);
        $publicationCategory->delete();
        return redirect()->route('publicationCategory.index')->with('success', 'Publication Category deleted successfully');
    }
}
