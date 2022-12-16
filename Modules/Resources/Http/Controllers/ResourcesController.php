<?php

namespace Modules\Resources\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Resources\Entities\Resource;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ResourcesController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $resources = Resource::orderBy('created_at', 'ASC')->paginate(100);
        return view('resources::index', compact('resources'));
    }

    public function create()
    {
        return view('resources::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
            $resource = new Resource();
            $resource->title = $request->title;
            $resource->category = $request->category;
            $resource->description = $request->description;
            $resource->publish = $request->publish ? 1 : 0;
            if($request->hasFile('file')){
                $file = $request->file;
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/resource/',$filename);
                $resource->file = $filename;
            }
            $resource->save();
            return redirect()->route('resource.index')->with('success', 'resource created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $resource = Resource::findOrFail($id);
        return view('resources::edit', compact('resource'));
    }

    public function update(Request $request, $id)
    {
        $resource = Resource::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
             $resource->title = $request->title;
             $resource->category = $request->category;
            $resource->description = $request->description;
            $resource->publish = $request->publish ? 1 : 0;
            if($request->hasFile('file')){
                $file = $request->file;
                $old_file = $resource->file;
                Storage::disk('public')->delete('resource/'.$old_file);
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/resource/',$filename);
                $resource->file = $filename;
            }
            $resource->save();
            return redirect()->route('resource.index')->with('success', 'resource updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $resource = Resource::findOrFail($id);
        if($resource->file != null){
            Storage::disk('public')->delete('resource/'.$resource->file);
        }
        $resource->delete();
        return redirect()->route('resource.index')->with('success', 'resource deleted successfully');
    }
}
