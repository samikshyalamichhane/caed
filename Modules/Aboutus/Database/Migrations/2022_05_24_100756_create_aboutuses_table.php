<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('approach_title')->nullable();
            $table->longText('approach_short_description')->nullable();
            $table->string('organizational_image')->nullable();
            $table->string('organizational_back_image')->nullable();
            $table->string('aboutus_inner_image')->nullable();
            $table->longText('short_description')->nullable();

            //HomePage
            $table->string('navbar_title')->nullable();
            $table->string('home_title')->nullable();
            $table->string('home_year')->nullable();
            $table->longText('home_description')->nullable();
            $table->string('home_image')->nullable();


            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Aboutus',
            'guard_name' => 'web',
            'group' => 'Site'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Aboutus')->delete();
        Schema::dropIfExists('aboutuses');
    }
}
