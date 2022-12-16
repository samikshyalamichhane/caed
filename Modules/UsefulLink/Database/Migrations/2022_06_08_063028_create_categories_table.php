<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
         DB::table('permissions')->insert([
            'name' => 'View Category',
            'guard_name' => 'web',
            'group' => 'Category'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Category',
            'guard_name' => 'web',
            'group' => 'Category'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Category',
            'guard_name' => 'web',
            'group' => 'Category'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Category',
            'guard_name' => 'web',
            'group' => 'Category'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
