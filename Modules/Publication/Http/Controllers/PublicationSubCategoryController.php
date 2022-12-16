<?php

namespace Modules\Publication\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Publication\Entities\PublicationSubCategory;
use Modules\Publication\Entities\PublicationCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublicationSubCategoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $publicationSubCategories = PublicationSubCategory::with('publicationCategory')->orderBy('created_at', 'ASC')->paginate(100);
        return view('publication::subCategory.index', compact('publicationSubCategories'));
    }

    public function create()
    {
        $publicationCategories = PublicationCategory::orderBy('created_at', 'ASC')->get();
        return view('publication::subCategory.create',compact('publicationCategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required|max:150',
            'sub_category' => 'required|max:150',
        ]);
        try {
            $publicationSubCategory = new PublicationSubCategory();
            $publicationSubCategory->publicationCategory_id = $request->category;
            $publicationSubCategory->publication_sub_category = $request->sub_category;
            $publicationSubCategory->publish = $request->publish ? 1 : 0;
            $publicationSubCategory->save();
            return redirect()->route('publicationSubCategory.index')->with('success', 'Publication Sub Category created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $publicationCategories = PublicationCategory::orderBy('created_at', 'ASC')->get();
        $publicationSubCategories = PublicationSubCategory::findOrFail($id);
        return view('publication::subCategory.edit', compact('publicationCategories','publicationSubCategories'));
    }

    public function update(Request $request, $id)
    {
        $publicationSubCategory = PublicationSubCategory::findOrFail($id);
        $this->validate($request, [
            'sub_category' => 'required|max:150',
        ]);
        try {
            $publicationSubCategory->publicationCategory_id = $request->category?$request->category:$publicationSubCategory->publicationCategory_id;
            $publicationSubCategory->publication_sub_category = $request->sub_category;
            $publicationSubCategory->publish = $request->publish ? 1 : 0;
            $publicationSubCategory->save();
            return redirect()->route('publicationSubCategory.index')->with('success', 'Publication Sub Category updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $publicationSubCategory = PublicationSubCategory::findOrFail($id);
        $publicationSubCategory->delete();
        return redirect()->route('publicationSubCategory.index')->with('success', 'Publication Sub Category deleted successfully');
    }

    public function subCat(Request $request)
    {

        $parent_id = $request->cat_id;

        $subcategories = PublicationCategory::where('id',$parent_id)
                              ->with('publicationSubCategory')
                              ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }
}
