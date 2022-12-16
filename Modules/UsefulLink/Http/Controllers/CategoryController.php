<?php

namespace Modules\UsefulLink\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\UsefulLink\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::orderBy('created_at', 'ASC')->paginate(100);
        return view('usefullink::category.index', compact('categories'));
    }

    public function create()
    {
        return view('usefullink::category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $category = new Category();
            $category->title = $request->title;
            $category->publish = $request->publish ? 1 : 0;
            $category->save();
            return redirect()->route('category.index')->with('success', 'Category created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('usefullink::category.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $category->title = $request->title;
            $category->publish = $request->publish ? 1 : 0;
            $category->save();
            return redirect()->route('category.index')->with('success', 'Category updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
