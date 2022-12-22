<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\DevelopmentProject\Entities\Project;
use Modules\Partner\Entities\Partner;

class PartnerController extends Controller
{
    public function partners(){
        $partners = Partner::published()->get();
        return view('frontend::partners',compact('partners'));
    }

    public function projects(){
        $projects = Project::published()->get();
        return view('frontend::projectlisting',compact('projects'));
    }

    public function projectDetails($slug){
        $project = Project::where('slug',$slug)->first();
        $relatedprojects = Project::where('id','!=',$project->id)->get();
        return view('frontend::projectinner',compact('project','relatedprojects'));
    }
}
