<?php

namespace Modules\MediaClipping\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Support\Renderable;
use Modules\MediaClipping\Entities\MediaClipping;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MediaClippingController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $mediaClippings = MediaClipping::orderBy('created_at', 'ASC')->paginate(100);
        return view('mediaclipping::index', compact('mediaClippings'));
    }

    public function create()
    {
        return view('mediaclipping::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $mediaClipping = new MediaClipping();
            $mediaClipping->title = $request->title;
            $mediaClipping->description = $request->description;
            $mediaClipping->date = $request->date;
            $mediaClipping->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/mediaClipping', $filename);
                $mediaClipping->image = $path;
            }

            $mediaClipping->save();
            return redirect()->route('MediaClipping.index')->with('success', 'MediaClipping created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $mediaClippings = MediaClipping::findOrFail($id);
        return view('mediaclipping::edit', compact('mediaClippings'));
    }

    public function update(Request $request, $id)
    {
        $mediaClipping = MediaClipping::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $mediaClipping->title = $request->title;
            $mediaClipping->description = $request->description;
            $mediaClipping->date = $request->date;
            $mediaClipping->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/mediaClippings', $filename);
                $mediaClipping->image = $path;
            }
            $mediaClipping->save();
            return redirect()->route('MediaClipping.index')->with('success', 'MediaClippings updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $mediaClipping = MediaClipping::findOrFail($id);
        $mediaClipping->delete();
        return redirect()->route('MediaClipping.index')->with('success', 'MediaClipping deleted successfully');
    }
}
