<?php

namespace Modules\Approach\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;
use Modules\Approach\Entities\Approach;

class ApproachController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $approaches = Approach::orderBy('created_at', 'ASC')->paginate(100);
        return view('approach::index', compact('approaches'));
    }

    public function create()
    {
        return view('approach::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'category' => 'required',
            'description'=>'required'
        ]);
        try {
            $approach = new Approach();
            $approach->title = $request->title;
            $approach->category = $request->category;
            $approach->description = $request->description;
            $approach->icon = $request->icon;
            $approach->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/approach', $filename);
                $approach->image = $path;
            }
            $approach->save();
            return redirect()->route('approach.index')->with('success', 'approach created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $approach = Approach::findOrFail($id);
        return view('approach::edit', compact('approach'));
    }

    public function update(Request $request, $id)
    {
        $approach = Approach::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'category' => 'required',
            'description' => "required",
        ]);
        try {
            $approach->title = $request->title;
            $approach->category = $request->category;
            $approach->description = $request->description;
            $approach->icon = $request->icon;
            $approach->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/approach', $filename);
                $approach->image = $path;
            }
            $approach->save();
            return redirect()->route('approach.index')->with('success', 'approach updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $approach = Approach::findOrFail($id);
        $approach->delete();
        return redirect()->route('approach.index')->with('success', 'approach deleted successfully');
    }
}
