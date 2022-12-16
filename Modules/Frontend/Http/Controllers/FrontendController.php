<?php

namespace Modules\Frontend\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Aboutus\Entities\Aboutus;
use Modules\Approach\Entities\Approach;
use Modules\Career\Entities\Career;
use Modules\Gallery\Entities\Gallery;
use Modules\NewsEvent\Entities\Event;
use Modules\Site\Entities\Site;
use Modules\Slider\Entities\Slider;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Site\Entities\About;
use Modules\Site\Entities\Mission;
use Modules\Contactus\Entities\Contactus;
use Modules\DevelopmentProject\Entities\Project;
use Modules\DevelopmentProject\Entities\ProjectCategory;
use Modules\Frontend\Entities\Volunteer;
use Modules\NewsEvents\Entities\NewsEvent;
use Modules\Pages\Entities\Page;
use Modules\Resources\Entities\Resource;
use Modules\Team\Entities\Team;
use Modules\Vacancy\Entities\Vacancy;

class FrontendController extends Controller
{
    public $info;
    use ValidatesRequests;

    public function __construct()
    {
        $this->info = Site::latest()->first();
    }
    public function index(){
        $approaches = Approach::published()->get();
        $news =NewsEvent::published()->ordered()->get(); 
        $projects = Project::published()->ordered()->get();
        $homepage = Aboutus::first();
        $sliders = Slider::published()->get();
        return view('frontend::index',compact('approaches','news','projects','homepage','sliders'));
    }

    public function about(){
        $approaches = Approach::published()->get();
        $about = Aboutus::first();
        $exec_teams = Team::where('category','executive_board')->get();
        $staffs = Team::where('category','staff')->get();
        return view('frontend::about',compact('approaches','about','exec_teams','staffs'));
    }

    public function resources(){
        $resources = Resource::where('category','resource')->get();
        return view('frontend::resources',compact('resources'));
    }

    public function projectReports(){
        $resources = Resource::where('category','report')->get();
        return view('frontend::resources',compact('resources'));
    }

    public function publications(){
        $resources = Resource::where('category','publication')->get();
        return view('frontend::resources',compact('resources'));
    }

    public function vacancyList(){
        $vacancies = Vacancy::published()->orderBy('created_at','DESC')->get();
        return view('frontend::vacancies',compact('vacancies'));
    }

    public function volunteer(){
        return view('frontend::volunteer');
    }

    public function postVolunteer(Request $request){
        $this->validate($request, [
            'name' => 'required|max:150',
            'email' => 'required|email',
        ]);
        try {
            $volunteer = new Volunteer();
            $volunteer->name = $request->name;
            $volunteer->email = $request->email;
            $volunteer->phone = $request->phone;
            $volunteer->country = $request->country;
            $volunteer->issues = $request->issues;
            $volunteer->save();
            return redirect()->back()->with('success', 'Form Submitted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function newsList(){
        $news = NewsEvent::published()->orderBy('created_at','DESC')->get();
        return view('frontend::newslisting',compact('news'));
    }

    public function newsInner($slug){
        $news = NewsEvent::where('slug',$slug)->first();
        $relatedposts = NewsEvent::where('id','!=',$news->id)->get();
        return view('frontend::newsinner',compact('news','relatedposts'));
    }

    public function issueAndThemes(){
        $projectcat = ProjectCategory::where('slug','issues-and-themes')->first();
        $projects = Project::where('projectCategory_id',$projectcat->id)->get();
        return view('frontend::issuesandthemes',compact('projects'));
    }

    public function supportAndDonate(){
        $page = Page::where('slug','support-and-donate')->first();
        return view('frontend::support',compact('page'));
    }

    public function contact(){
        return view('frontend::contact');
    }

    public function contactSave(Request $request){
        $this->validate($request, [
            'name' => 'required|max:150',
            'email' => 'required|email',
        ]);
        try {
            $contact = new Contactus();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone_no = $request->phone_no;
            $contact->subject = $request->subject;
            $contact->comment = $request->comment;
            $contact->save();
            return redirect()->back()->with('success', 'Form Submitted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
