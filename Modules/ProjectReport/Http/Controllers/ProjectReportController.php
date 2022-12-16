<?php

namespace Modules\ProjectReport\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\ProjectReport\Entities\ProjectReport;

class ProjectReportController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projectreports  = ProjectReport::orderBy('created_at', 'ASC')->paginate(1000);
        return view('projectreport::index', compact('projectreports'));
    }


    public function create()
    {
        return view('projectreport::create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',

        ]);
        try {
            $projectreport = new ProjectReport();
            $projectreport->title = $request->title;
            $projectreport->description = $request->description;
            $projectreport->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/projectreports', $file, 'public');
                $path = $file->storeAs('public/projectreports', $filename);
                $projectreport->image = $path;
            }
            if ($request->hasFile('document')) {
                $file = $request->document;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/projectreports', $file, 'public');
                $path = $file->storeAs('public/projectreports', $filename);
                $projectreport->document = $path;
            }

            $projectreport->save();
            return redirect()->route('projectreport.index')->with('success', 'projectreport created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $projectreport = ProjectReport::findOrFail($id);
        return view('projectreport::edit', compact('projectreport'));
    }

    public function update(Request $request, $id)
    {
        $projectreport = ProjectReport::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {

            $projectreport->title = $request->title;
            $projectreport->description = $request->description;
            $projectreport->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/projectreports', $file, 'public');
                $path = $file->storeAs('public/projectreports', $filename);
                $projectreport->image = $path;
            }

            if ($request->hasFile('document')) {
                $file = $request->document;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/projectreports', $file, 'public');
                $path = $file->storeAs('public/projectreports', $filename);
                $projectreport->document = $path;
            }

            $projectreport->save();
            return redirect()->route('projectreport.index')->with('success', 'projectreport created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $projectreport = ProjectReport::findOrFail($id);
        $projectreport->delete();
        return redirect()->route('projectreport.index')->with('success', 'projectreport deleted successfully');
    }
}
