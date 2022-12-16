<?php

namespace Modules\NewsEvents\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\NewsEvents\Entities\NewsEvent;
use Illuminate\Routing\Controller;

class NewsEventsController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $news = NewsEvent::orderBy('created_at', 'ASC')->paginate(100);
        return view('newsevents::index', compact('news'));
    }

    public function create()
    {
        return view('newsevents::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'bg_image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000'
        ]);
        try {
            $newsevent = new NewsEvent();
            $newsevent->title = $request->title;
            $newsevent->description = $request->description;
            $newsevent->short_description = $request->short_description;
            $newsevent->author = $request->author;
            $newsevent->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/newsevents', $filename);
                $newsevent->image = $path;
            }
            if ($request->hasFile('bg_image')) {
                $file = $request->bg_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/newsevents', $filename);
                $newsevent->bg_image = $path;
            }
            $newsevent->save();
            return redirect()->route('newsevent.index')->with('success', 'NewsEvents created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $news = NewsEvent::findOrFail($id);
        return view('newsevents::edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $newsevent = NewsEvent::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'bg_image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000'
        ]);
        try {
            $newsevent->title = $request->title;
            $newsevent->description = $request->description;
            $newsevent->short_description = $request->short_description;
            $newsevent->author = $request->author;
            $newsevent->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/newsevents', $filename);
                $newsevent->image = $path;
            }
            if ($request->hasFile('bg_image')) {
                $file = $request->bg_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/newsevents', $filename);
                $newsevent->bg_image = $path;
            }
            $newsevent->save();
            return redirect()->route('newsevent.index')->with('success', 'NewsEvents updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $newsevent = NewsEvent::findOrFail($id);
        $newsevent->delete();
        return redirect()->route('newsevent.index')->with('success', 'NewsEvents deleted successfully');
    }
}
