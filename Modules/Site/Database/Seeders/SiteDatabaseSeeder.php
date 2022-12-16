<?php

namespace Modules\Site\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Site\Entities\Site;

class SiteDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Site::create([
            'title' => "caed"
        ]);

        // $this->call("OthersTableSeeder");
    }
}
