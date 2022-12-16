<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\DevelopmentProject\Entities\Project;
use Modules\DevelopmentProject\Entities\ProjectCategory;
use Modules\Partner\Entities\Partner;

class PartnerController extends Controller
{
    public function partners(){
        $partners = Partner::published()->get();
        return view('frontend::partners',compact('partners'));
    }

    public function projects(){
        $projects = Project::published()->get();
        // $categories = ProjectCategory::where('slug',$slug)->first();
        // $projects = Project::where('projectCategory_id',$categories->id)->get();
        return view('frontend::projectlisting',compact('projects'));
    }

    public function projectDetails($slug){
        $project = Project::where('slug',$slug)->first();
        return view('frontend::projectinner',compact('project'));
    }
}
