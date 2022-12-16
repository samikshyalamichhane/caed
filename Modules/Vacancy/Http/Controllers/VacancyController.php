<?php

namespace Modules\Vacancy\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Modules\Vacancy\Entities\Vacancy;

class VacancyController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $vacancies = Vacancy::orderBy('created_at', 'ASC')->paginate(100);
        return view('vacancy::index', compact('vacancies'));
    }

    public function create()
    {
        return view('vacancy::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
            $vacancy = new Vacancy();
            $vacancy->title = $request->title;
            $vacancy->description = $request->description;
            $vacancy->publish = $request->publish ? 1 : 0;
            if($request->hasFile('file')){
                $file = $request->file;
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/vacancy/',$filename);
                $vacancy->file = $filename;
            }
            $vacancy->save();
            return redirect()->route('vacancy.index')->with('success', 'vacancy created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancy::edit', compact('vacancy'));
    }

    public function update(Request $request, $id)
    {
        $vacancy = vacancy::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'file' => 'nullable|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
             $vacancy->title = $request->title;
            $vacancy->description = $request->description;
            $vacancy->publish = $request->publish ? 1 : 0;
            if($request->hasFile('file')){
                $file = $request->file;
                $old_file = $vacancy->file;
                Storage::disk('public')->delete('vacancy/'.$old_file);
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/vacancy/',$filename);
                $vacancy->file = $filename;
            }
            $vacancy->save();
            return redirect()->route('vacancy.index')->with('success', 'vacancy updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $vacancy = vacancy::findOrFail($id);
        if($vacancy->file != null){
            Storage::disk('public')->delete('vacancy/'.$vacancy->file);
        }
        $vacancy->delete();
        return redirect()->route('vacancy.index')->with('success', 'vacancy deleted successfully');
    }
}
