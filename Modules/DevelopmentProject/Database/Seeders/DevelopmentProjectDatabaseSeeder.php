<?php

namespace Modules\DevelopmentProject\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\DevelopmentProject\Entities\ProjectCategory;

class DevelopmentProjectDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    
        $cat = ProjectCategory::create([
            'title' => "Issues And Themes",
            'slug' => "issues-and-themes",
            'publish' =>1,
            'created_at'=>Carbon::now()
        ]);
        $cat = ProjectCategory::create([
            'title' => "Ongoing Projects",
            'slug' => "ongoing-projects",
            'publish' =>1,
            'created_at'=>Carbon::now()
        ]);
        $cat = ProjectCategory::create([
            'title' => "Completed Projects",
            'slug' => "completed_projects",
            'publish' =>1,
            'created_at'=>Carbon::now()
        ]);

        // $this->call("OthersTableSeeder");
    }
}
