<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\DevelopmentProject\Entities\Project;
use Modules\Partner\Entities\Partner;
use SEOMeta;

class PartnerController extends Controller
{
    public function partners(){
        SEOMeta::setTitle('Partners Listing');
        SEOMeta::setDescription('Partners Listing');
        SEOMeta::setCanonical(url()->current());
        // SEOMeta::addMeta('article:published_time', $page->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword('Partners Listing');
        $partners = Partner::published()->get();
        return view('frontend::partners',compact('partners'));
    }

    public function projects(){
        SEOMeta::setTitle('Project Listing');
        SEOMeta::setDescription('Project Listing');
        SEOMeta::setCanonical(url()->current());
        // SEOMeta::addMeta('article:published_time', $page->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword('Project Listing');
        $projects = Project::published()->get();
        return view('frontend::projectlisting',compact('projects'));
    }

    public function projectDetails($slug){
        $project = Project::where('slug',$slug)->first();
        SEOMeta::setTitle($project->meta_title);
        SEOMeta::setDescription($project->meta_description);
        SEOMeta::setCanonical(url()->current());
        SEOMeta::addMeta('article:published_time', $project->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($project->keyword);
        $relatedprojects = Project::where('id','!=',$project->id)->get();
        return view('frontend::projectinner',compact('project','relatedprojects'));
    }
}
