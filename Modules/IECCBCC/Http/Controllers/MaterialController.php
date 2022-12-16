<?php

namespace Modules\IECCBCC\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\IECCBCC\Entities\Material;
use Modules\IECCBCC\Entities\MaterialCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MaterialController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $materials = Material::orderBy('created_at', 'ASC')->with('materialCategory')->get();
        return view('ieccbcc::material.index',compact('materials'));
    }

    public function create()
    {
        $materialCategories = MaterialCategory::where('publish',1)->get();
        return view('ieccbcc::material.create',compact('materialCategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'materialCategory_id' => 'required',
            'title' => 'required|max:150',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
            ],
            [
            'materialCategory_id.required' => 'Material Category Title is Required',
            ]
        );
        try {
            $material = new Material();
            $material->title = $request->title;
            $material->materialCategory_id = $request->materialCategory_id;
            $material->date = $request->date;
            $material->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('file')) {
                $file = $request->file;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/IECCBCC', $filename);
                $material->file = $filename;
            }
            $material->save();
            return redirect()->route('material.index')->with('success', 'Material created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $materials = Material::findOrFail($id);
        $materialCategories = MaterialCategory::where('publish',1)->get();
        return view('ieccbcc::material.edit', compact('materials','materialCategories'));
    }

    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',

        ]);
        try {
            $material->title = $request->title;
            $material->materialCategory_id = $request->materialCategory_id?$request->materialCategory_id:$material->materialCategory_id;
            $material->date = $request->date;
            $material->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('file')) {
                $file = $request->file;
                if($material->file != null){
                    $oldfile = $material->file;
                    //dd(public_path(Storage::url('public/IECCBCC/'.$oldfile)));
                    unlink(public_path(Storage::url('public/IECCBCC/'.$oldfile)));

                }
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/IECCBCC', $filename);
                $material->file = $filename;
            }
            $material->save();
            return redirect()->route('material.index')->with('success', 'Material updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        unlink(public_path(Storage::url('public/IECCBCC/'.$material->file)));
        $material->delete();
        return redirect()->route('material.index')->with('success', 'Material deleted successfully');
    }
}
