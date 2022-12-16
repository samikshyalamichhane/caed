<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuccessStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View SuccessStory',
            'guard_name' => 'web',
            'group' => 'SuccessStory'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add SuccessStory',
            'guard_name' => 'web',
            'group' => 'SuccessStory'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit SuccessStory',
            'guard_name' => 'web',
            'group' => 'SuccessStory'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete SuccessStory',
            'guard_name' => 'web',
            'group' => 'SuccessStory'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('success_stories');
    }
}
