<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Publication',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Publication',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Publication',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Publication',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication_categories');
    }
}
