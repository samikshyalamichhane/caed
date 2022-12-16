<?php
namespace App\ViewComposer;
use Illuminate\View\View;
use Modules\Aboutus\Entities\Aboutus;
use Modules\DevelopmentProject\Entities\ProjectCategory;
use Modules\Site\Entities\Site;
use Modules\Service\Entities\Service;
use Modules\Partner\Entities\Partner;

class ViewComposer {
	private $dashboard;
	public function __construct() {
	}
	public function compose(View $view) {
        $site = Site::latest()->first();
		$about = Aboutus::first()->only('navbar_title');
        $projectCategories = ProjectCategory::with('projects')->published()->ordered()->get();

		$view->with([
			'dashboard_site'=>$site,
			'dashboard_project_categories'=>$projectCategories,
			'dashboard_about'=>$about,
		]);
	}

}
