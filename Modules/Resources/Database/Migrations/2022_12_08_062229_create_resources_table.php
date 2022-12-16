<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('date')->nullable();
            $table->string('file')->nullable();
            $table->string('publish')->nullable();

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Resource',
            'guard_name' => 'web',
            'group' => 'Resource'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Resource',
            'guard_name' => 'web',
            'group' => 'Resource'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Resource',
            'guard_name' => 'web',
            'group' => 'Resource'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Resource',
            'guard_name' => 'web',
            'group' => 'Resource'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Resource')->delete();
        DB::table('permissions')->where('name', 'Add Resource')->delete();
        DB::table('permissions')->where('name', 'Edit Resource')->delete();
        DB::table('permissions')->where('name', 'Delete Resource')->delete();
        Schema::dropIfExists('resources');
    }
}
