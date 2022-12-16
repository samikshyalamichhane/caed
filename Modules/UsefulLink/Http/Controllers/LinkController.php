<?php

namespace Modules\UsefulLink\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\UsefulLink\Entities\Link;
use Modules\UsefulLink\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LinkController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $links = Link::with('category')->orderBy('created_at', 'ASC')->paginate(100);
        //dd($links);
        return view('usefullink::link.index', compact('links'));
    }

    public function create()
    {
        $categories = Category::where('publish',1)->get();
        return view('usefullink::link.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'category' => 'required',
        ]);
        try {
            $link = new Link();
            $link->title = $request->title;
            $link->link = $request->website_link;
            $link->category_id = $request->category;
            $link->publish = $request->publish ? 1 : 0;
            $link->save();
            return redirect()->route('link.index')->with('success', 'Link created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $links = Link::findOrFail($id);
        $categories = Category::where('publish',1)->get();
        return view('usefullink::link.edit', compact('links','categories'));
    }

    public function update(Request $request, $id)
    {
        $link = Link::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $link->title = $request->title;
            $link->category_id = $request->category?$request->category:$link->category_id;
            $link->link = $request->website_link;
            $link->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('logo')) {
                $file = $request->logo;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/link', $filename);
                $link->logo = $path;
            }

            $link->save();
            return redirect()->route('link.index')->with('success', 'Link updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();
        return redirect()->route('link.index')->with('success', 'Link deleted successfully');
    }
}
