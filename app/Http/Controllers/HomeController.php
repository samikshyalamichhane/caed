<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Modules\Contactus\Entities\Contactus;
use Modules\DevelopmentProject\Entities\Project;
use Modules\NewsEvents\Entities\NewsEvent;
use Modules\Team\Entities\Team;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        $teams = Team::count();
        $projects = Project::count();
        $news = NewsEvent::count();
        $contactuss = Contactus::get();
        return view('dashboard',compact('teams','projects','news','contactuss'));
    }
}
