<?php

namespace Modules\Network\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Modules\Network\Entities\Network;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NetworkController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $networks = Network::orderBy('created_at', 'ASC')->paginate(100);
        return view('network::index', compact('networks'));
    }

    public function create()
    {
        return view('network::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
        ]);
        try {
            $network = new Network();
            $network->title = $request->title;
            $network->category = $request->category;
            $network->publish = $request->publish ? 1 : 0;
            $network->save();
            return redirect()->route('network.index')->with('success', 'Network created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $networks = Network::findOrFail($id);
        return view('network::edit', compact('networks'));
    }

    public function update(Request $request, $id)
    {
        $network = Network::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $network->title = $request->title;

            $network->category = $request->category?$request->category:$network->category;
            $network->publish = $request->publish ? 1 : 0;
            $network->save();
            return redirect()->route('network.index')->with('success', 'Network updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $network = Network::findOrFail($id);
        $network->delete();
        return redirect()->route('network.index')->with('success', 'Network deleted successfully');
    }
}
