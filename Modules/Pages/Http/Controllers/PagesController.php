<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Pages\Entities\Page;

class PagesController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pages = Page::orderBy('created_at', 'ASC')->paginate(100);
        return view('pages::index', compact('pages'));
    }

    public function create()
    {
        return view('pages::create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'bg_image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000'
        ]);
        try {
            $page = new Page();
            $page->title = $request->title;
            $page->description = $request->description;
            $page->short_description = $request->short_description;
            $page->meta_description = $request->meta_description;
            $page->meta_title = $request->meta_title;
            $page->keyword = $request->keyword;
            $page->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/pages', $filename);
                $page->image = $path;
            }
            if ($request->hasFile('bg_image')) {
                $file = $request->bg_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/pages', $filename);
                $page->bg_image = $path;
            }
            dd($page);
            $page->save();
            return redirect()->route('page.index')->with('success', 'pages created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $page = page::findOrFail($id);
        return view('pages::edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = page::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'bg_image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000'
        ]);
        try {
            $page->title = $request->title;
            $page->description = $request->description;
            $page->short_description = $request->short_description;
            $page->meta_description = $request->meta_description;
            $page->meta_title = $request->meta_title;
            $page->keyword = $request->keyword;
            $page->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/pages', $filename);
                $page->image = $path;
            }
            if ($request->hasFile('bg_image')) {
                $file = $request->bg_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/pages', $filename);
                $page->bg_image = $path;
            }
            $page->save();
            return redirect()->route('page.index')->with('success', 'pages updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()->route('page.index')->with('success', 'pages deleted successfully');
    }
}
