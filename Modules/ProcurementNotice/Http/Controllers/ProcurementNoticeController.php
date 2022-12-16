<?php

namespace Modules\ProcurementNotice\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProcurementNotice\Entities\ProcurementNotice;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;

class ProcurementNoticeController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $procurementNotices = ProcurementNotice::orderBy('created_at', 'ASC')->paginate(100);
        return view('procurementnotice::index', compact('procurementNotices'));
    }

    public function create()
    {
        return view('procurementnotice::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'notice' => 'required|mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
            $procurementNotice = new ProcurementNotice();
            $procurementNotice->title = $request->title;
            $procurementNotice->publish_date = $request->publish_date;
            $procurementNotice->submission_date = $request->submission_date;
            $procurementNotice->description = $request->description;
            $procurementNotice->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('notice')) {
                $file = $request->notice;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/Documents', $filename);
                $procurementNotice->notice = $filename;
            }
            $procurementNotice->save();
            return redirect()->route('ProcurementNotice.index')->with('success', 'ProcurementNotice created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $procurementNotices = ProcurementNotice::findOrFail($id);
        return view('procurementnotice::edit', compact('procurementNotices'));
    }

    public function update(Request $request, $id)
    {
        $procurementNotice = ProcurementNotice::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => "required",
            'notice' => 'mimes:png,gif,jpeg,txt,pdf,doc',
        ]);
        try {
            $procurementNotice->title = $request->title;
            $procurementNotice->publish_date = $request->publish_date;
            $procurementNotice->submission_date = $request->submission_date;
            $procurementNotice->description = $request->description;
            $procurementNotice->publish = $request->publish ? 1 : 0;

            if ($request->hasFile('notice')) {
                $file = $request->notice;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/Documents', $filename);
                $procurementNotice->notice = $filename;
            }
            $procurementNotice->save();
            return redirect()->route('ProcurementNotice.index')->with('success', 'ProcurementNotice updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $procurementNotice = ProcurementNotice::findOrFail($id);
        if(Storage::disk('public')->exists('Documents/'.$procurementNotice->notice)){
            Storage::disk('public')->delete('Documents/'.$procurementNotice->notice);
            /*
                Delete Multiple files this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        }else{
            return redirect()->back()->with('success', 'File does not exist.');
        }
        $procurementNotice->delete();
        return redirect()->route('ProcurementNotice.index')->with('success', 'ProcurementNotice deleted successfully');
    }
}
