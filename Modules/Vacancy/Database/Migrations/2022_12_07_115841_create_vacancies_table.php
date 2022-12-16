<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('file')->nullable();
            $table->string('publish')->nullable();

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Vacancy',
            'guard_name' => 'web',
            'group' => 'Site'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Vacancy',
            'guard_name' => 'web',
            'group' => 'Site'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Vacancy',
            'guard_name' => 'web',
            'group' => 'Site'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Vacancy',
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
        Schema::dropIfExists('vacancies');
    }
}
