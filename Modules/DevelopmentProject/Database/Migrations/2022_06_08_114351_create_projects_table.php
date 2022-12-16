<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('bg_image')->nullable();
            $table->unsignedBigInteger('projectCategory_id');
            $table->foreign('projectCategory_id')->references('id')->on('project_categories')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View DevelopmentProject',
            'guard_name' => 'web',
            'group' => 'DevelopmentProject'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add DevelopmentProject',
            'guard_name' => 'web',
            'group' => 'DevelopmentProject'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit DevelopmentProject',
            'guard_name' => 'web',
            'group' => 'DevelopmentProject'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete DevelopmentProject',
            'guard_name' => 'web',
            'group' => 'DevelopmentProject'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View DevelopmentProject')->delete();
        DB::table('permissions')->where('name', 'Add DevelopmentProject')->delete();
        DB::table('permissions')->where('name', 'Edit DevelopmentProject')->delete();
        DB::table('permissions')->where('name', 'Delete DevelopmentProject')->delete();
        Schema::dropIfExists('projects');
    }
}
