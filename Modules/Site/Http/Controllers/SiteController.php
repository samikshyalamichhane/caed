<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Site\Entities\About;
use Modules\Site\Entities\Banner;
use Modules\Site\Entities\Mission;
use Modules\Site\Entities\OpeningHour;
use Modules\Site\Entities\Site;

class SiteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $site = Site::latest()->first();
        return view('site::index', compact('site'));
    }

    public function create()
    {
        return view('site::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('site::show');
    }

    public function edit($id)
    {
        return view('site::edit');
    }

    public function update(Request $request, $id)
    {
        $site = Site::latest()->first();
        $site->title = $request->title;
        $site->description = $request->description;
        $site->meta_title = $request->meta_title;
        $site->meta_keyword = $request->meta_keyword;
        $site->email1 = $request->email1;
        $site->email2 = $request->email2;
        $site->contact1 = $request->contact1;
        $site->contact2  = $request->contact2;
        $site->facebook = $request->facebook;
        $site->instagram = $request->instagram;
        $site->youtube = $request->youtube;
        $site->twitter = $request->twitter;
        $site->address = $request->address;
        $site->volunteer_detail = $request->volunteer_detail;
        $site->map = $request->map;
        if ($request->hasFile('header_logo')) {
            $file = $request->header_logo;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->header_logo = $path;
        }
        if ($request->hasFile('footer_logo')) {
            $file = $request->footer_logo;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->footer_logo = $path;
        }
        if ($request->hasFile('fav_icon')) {
            $file = $request->fav_icon;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->fav_icon = $path;
        }
        if ($request->hasFile('our_logo')) {
            $file = $request->our_logo;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->our_logo = $path;
        }
        if ($request->hasFile('vacancy_banner')) {
            $file = $request->vacancy_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->vacancy_banner = $path;
        }
        if ($request->hasFile('news_banner')) {
            $file = $request->news_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->news_banner = $path;
        }
        if ($request->hasFile('volunteer_banner')) {
            $file = $request->volunteer_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->volunteer_banner = $path;
        }
        if ($request->hasFile('contact_banner')) {
            $file = $request->contact_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->contact_banner = $path;
        }
        if ($request->hasFile('support_banner')) {
            $file = $request->support_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->support_banner = $path;
        }
        if ($request->hasFile('partner_banner')) {
            $file = $request->partner_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->partner_banner = $path;
        }
        if ($request->hasFile('aboutus_banner')) {
            $file = $request->aboutus_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->aboutus_banner = $path;
        }
        if ($request->hasFile('project_report_banner')) {
            $file = $request->project_report_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->project_report_banner = $path;
        }
        if ($request->hasFile('publication_banner')) {
            $file = $request->publication_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->publication_banner = $path;
        }
        if ($request->hasFile('gallery_banner')) {
            $file = $request->gallery_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->gallery_banner = $path;
        }
        if ($request->hasFile('resources_banner')) {
            $file = $request->resources_banner;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::put('public/alumnis', $file, 'public');
            $path = $file->storeAs('public/site', $filename);
            $site->resources_banner = $path;
        }
        $site->save();
        return redirect()->back()->with('success', 'Site saved successfully');
    }

    public function about(Request $request)
    {
        $about = "";
        $latest = About::latest()->first();
        if ($latest) {
            $about = $latest;
        } else {
            $about = new About;
        }
        $about->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/about', $filename);
            $about->image = $path;
        }
        $about->save();
        return redirect()->back()->with('success', 'About saved successfully');
    }
    public function missionVision(Request $request)
    {
        $mission = "";
        $latest = Mission::latest()->first();
        if ($latest) {
            $mission = $latest;
        } else {
            $mission = new Mission;
        }
        $mission->mission = $request->mission;
        if ($request->hasFile('missionImage')) {
            $file = $request->missionImage;
            $filename = rand(10, 100) . time() . '-mission.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/mission', $filename);
            $mission->mission_image = $path;
        }
        $mission->vision = $request->vision;
        if ($request->hasFile('visionImage')) {
            $file = $request->visionImage;
            $filename = rand(10, 100) . time() . '-vision.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/mission', $filename);
            $mission->vision_image = $path;
        }
        $mission->save();
        return redirect()->back()->with('success', 'About saved successfully');
    }
}
