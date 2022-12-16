<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('bg_image')->nullable();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Page',
            'guard_name' => 'web',
            'group' => 'Page'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Page',
            'guard_name' => 'web',
            'group' => 'Page'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Page',
            'guard_name' => 'web',
            'group' => 'Page'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Page',
            'guard_name' => 'web',
            'group' => 'Page'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Page')->delete();
        DB::table('permissions')->where('name', 'Add Page')->delete();
        DB::table('permissions')->where('name', 'Edit Page')->delete();
        DB::table('permissions')->where('name', 'Delete Page')->delete();
        Schema::dropIfExists('pages');
    }
}
