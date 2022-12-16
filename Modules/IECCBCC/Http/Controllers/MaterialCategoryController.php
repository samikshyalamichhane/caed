<?php

namespace Modules\IECCBCC\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\IECCBCC\Entities\MaterialCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MaterialCategoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $materialCategories = MaterialCategory::orderBy('created_at', 'ASC')->paginate(100);
        return view('ieccbcc::materialCategory.index', compact('materialCategories'));
    }

    public function create()
    {
        return view('ieccbcc::materialCategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $materialCategory = new MaterialCategory();
            $materialCategory->title = $request->title;
            $materialCategory->publish = $request->publish ? 1 : 0;
            $materialCategory->save();
            return redirect()->route('materialCategory.index')->with('success', 'MaterialCategory created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $materialCategories = MaterialCategory::findOrFail($id);
        return view('ieccbcc::materialCategory.edit', compact('materialCategories'));
    }

    public function update(Request $request, $id)
    {
        $materialCategory = MaterialCategory::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $materialCategory->title = $request->title;
            $materialCategory->publish = $request->publish ? 1 : 0;
            $materialCategory->save();
            return redirect()->route('materialCategory.index')->with('success', 'MaterialCategory updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $materialCategory = MaterialCategory::findOrFail($id);
        $materialCategory->delete();
        return redirect()->route('materialCategory.index')->with('success', 'MaterialCategory deleted successfully');
    }
}
