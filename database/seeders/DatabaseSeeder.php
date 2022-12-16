<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Site\Database\Seeders\SiteDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SiteDatabaseSeeder::class
        ]);
    }
}
