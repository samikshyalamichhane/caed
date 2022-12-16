<?php

namespace Modules\SuccessStory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\SuccessStory\Entities\SuccessStory;

class SuccessStoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $successStorys = SuccessStory::orderBy('created_at', 'ASC')->paginate(100);
        return view('successstory::index', compact('successStorys'));
    }

    public function create()
    {
        return view('successstory::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        ]);
        try {
            $successStory = new SuccessStory();
            $successStory->title = $request->title;
            $successStory->description = $request->description;
            $successStory->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/SuccessStory', $filename);
                $successStory->image = $path;
            }
            $successStory->save();
            return redirect()->route('SuccessStory.index')->with('success', 'SuccessStory created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $successStorys = SuccessStory::findOrFail($id);
        return view('successstory::edit', compact('successStorys'));
    }

    public function update(Request $request, $id)
    {
        $successStory = SuccessStory::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        ]);
        try {
            $successStory->title = $request->title;
            $successStory->description = $request->description;
            $successStory->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/SuccessStory', $filename);
                $successStory->image = $path;
            }
            $successStory->save();
            return redirect()->route('SuccessStory.index')->with('success', 'SuccessStory updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $successStory = SuccessStory::findOrFail($id);
        $successStory->delete();
        return redirect()->route('SuccessStory.index')->with('success', 'SuccessStory deleted successfully');
    }
}
