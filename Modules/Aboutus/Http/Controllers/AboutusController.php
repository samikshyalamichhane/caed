<?php

namespace Modules\Aboutus\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Aboutus\Entities\Aboutus;


class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = Aboutus::latest()->first();
        return view('aboutus::index', compact('aboutus'));
    }

    public function homePage()
    {
        $aboutus = Aboutus::latest()->first();
        return view('aboutus::homepage', compact('aboutus'));
    }

    public function update(Request $request, $id)
    {
        $aboutus = Aboutus::latest()->first();
        $aboutus->short_description = $request->short_description;
        $aboutus->approach_title = $request->approach_title;
        $aboutus->approach_short_description = $request->approach_short_description;
        // $aboutus->home_description = $request->home_description;
        // $aboutus->navbar_title = $request->navbar_title;
        // $aboutus->home_year = $request->home_year;
        // $aboutus->home_title = $request->home_title;
        
        if ($request->hasFile('organizational_back_image')) {
            $file = $request->organizational_back_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/aboutus', $filename);
            $aboutus->organizational_back_image = $path;
        }
        if ($request->hasFile('home_image')) {
            $file = $request->home_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/aboutus', $filename);
            $aboutus->home_image = $path;
        }
        if ($request->hasFile('organizational_image')) {
            $file = $request->organizational_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/aboutus', $filename);
            $aboutus->organizational_image = $path;
        }
        if ($request->hasFile('aboutus_inner_image')) {
            $file = $request->aboutus_inner_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/aboutus', $filename);
            $aboutus->aboutus_inner_image = $path;
        }
        $aboutus->save();
        return redirect()->back()->with('success', 'Abou Us content saved successfully');
    }

    public function updateHomepage(Request $request, $id)
    {
        $aboutus = Aboutus::latest()->first();
        $aboutus->home_description = $request->home_description;
        $aboutus->navbar_title = $request->navbar_title;
        $aboutus->home_year = $request->home_year;
        $aboutus->home_title = $request->home_title;
        
        if ($request->hasFile('home_image')) {
            $file = $request->home_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/aboutus', $filename);
            $aboutus->home_image = $path;
        }
        $aboutus->save();
        return redirect()->back()->with('success', 'Abou Us content saved successfully');
    }

}
