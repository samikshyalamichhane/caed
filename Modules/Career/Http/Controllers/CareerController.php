<?php

namespace Modules\Career\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Career\Entities\Career;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    use ValidatesRequests;
    public function index()
    {
        $careers = Career::orderBy('updated_at', 'DESC')->paginate(5);
        return view('career::index', compact('careers'));
    }


    public function create()
    {

        return view('career::create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',

        ]);
        try {
            $career = new Career;
            $career->title = $request->title;
            $career->publish_date = $request->publish_date;
            $career->expiry_date = $request->expiry_date;
            $career->no_of_requirement = $request->no_of_requirement;
            $career->description = $request->description;
            $career->publish = $request->publish ? 1 : 0;
            $career->save();
            return redirect()->route('career.index')->with('success', 'Career created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('career::edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        $career = Career::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',

        ]);
        try {
            $career->title = $request->title;
            $career->publish_date = $request->publish_date;
            $career->expiry_date = $request->expiry_date;
            $career->no_of_requirement = $request->no_of_requirement;
            $career->description = $request->description;
            $career->publish = $request->publish ? 1 : 0;
            $career->save();
            return redirect()->route('career.index')->with('success', 'Career updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->route('career.index')->with('success', 'Career deleted successfully');
    }
}
