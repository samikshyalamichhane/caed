<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('link')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Link',
            'guard_name' => 'web',
            'group' => 'Link'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Link',
            'guard_name' => 'web',
            'group' => 'Link'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Link',
            'guard_name' => 'web',
            'group' => 'Link'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Link',
            'guard_name' => 'web',
            'group' => 'Link'
        ]);
    }
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
