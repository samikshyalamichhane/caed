<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View IECCBCC',
            'guard_name' => 'web',
            'group' => 'IECCBCC'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add IECCBCC',
            'guard_name' => 'web',
            'group' => 'IECCBCC'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit IECCBCC',
            'guard_name' => 'web',
            'group' => 'IECCBCC'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete IECCBCC',
            'guard_name' => 'web',
            'group' => 'IECCBCC'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_categories');
    }
}
