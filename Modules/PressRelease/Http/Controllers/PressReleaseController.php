<?php

namespace Modules\PressRelease\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\PressRelease\Entities\PressRelease;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PressReleaseController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pressReleases = PressRelease::orderBy('created_at', 'ASC')->paginate(100);
        return view('pressrelease::index', compact('pressReleases'));
    }

    public function create()
    {
        return view('pressrelease::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $pressRelease = new PressRelease();
            $pressRelease->title = $request->title;
            $pressRelease->description = $request->description;
            $pressRelease->date = $request->date;
            $pressRelease->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/pressRelease', $filename);
                $pressRelease->image = $path;
            }

            $pressRelease->save();
            return redirect()->route('PressRelease.index')->with('success', 'PressRelease created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $pressReleases = PressRelease::findOrFail($id);
        return view('pressrelease::edit', compact('pressReleases'));
    }

    public function update(Request $request, $id)
    {
        $pressRelease = PressRelease::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $pressRelease->title = $request->title;
            $pressRelease->description = $request->description;
            $pressRelease->date = $request->date;
            $pressRelease->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/pressRelease', $filename);
                $pressRelease->image = $path;
            }
            $pressRelease->save();
            return redirect()->route('PressRelease.index')->with('success', 'PressRelease updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $pressRelease = PressRelease::findOrFail($id);
        $pressRelease->delete();
        return redirect()->route('PressRelease.index')->with('success', 'PressRelease deleted successfully');
    }
}
