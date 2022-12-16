<?php

namespace Modules\Publication\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Publication\Entities\PublicationSubCategory;
use Modules\Publication\Entities\PublicationCategory;
use Modules\Publication\Entities\Publication;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublicationController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'ASC')->paginate(100);
        return view('publication::publication.index', compact('publications'));
    }

    public function create()
    {
        return view('publication::publication.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
            $publication = new Publication();
            $publication->title = $request->title;
            $publication->description = $request->description;
            $publication->publish = $request->publish ? 1 : 0;
            if($request->hasFile('file')){
                $file = $request->file;
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/publication/',$filename);
                $publication->file = $filename;
            }
            $publication->save();
            return redirect()->route('publication.index')->with('success', 'Publication created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $publications = Publication::findOrFail($id);
        return view('publication::publication.edit', compact('publications'));
    }

    public function update(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
             $publication->title = $request->title;
            $publication->description = $request->description;
            $publication->publish = $request->publish ? 1 : 0;
            if($request->hasFile('file')){
                $file = $request->file;
                $old_file = $publication->file;
                Storage::disk('public')->delete('publication/'.$old_file);
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/publication/',$filename);
                $publication->file = $filename;
            }
            $publication->save();
            return redirect()->route('publication.index')->with('success', 'Publication updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        if($publication->file != null){
            Storage::disk('public')->delete('publication/'.$publication->file);
        }
        $publication->delete();
        return redirect()->route('publication.index')->with('success', 'Publication deleted successfully');
    }


}
