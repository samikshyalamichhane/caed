<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('images')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Gallery',
            'guard_name' => 'web',
            'group' => 'Gallery'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Gallery',
            'guard_name' => 'web',
            'group' => 'Gallery'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Gallery',
            'guard_name' => 'web',
            'group' => 'Gallery'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Gallery',
            'guard_name' => 'web',
            'group' => 'Gallery'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Gallery')->delete();
        DB::table('permissions')->where('name', 'Add Gallery')->delete();
        DB::table('permissions')->where('name', 'Edit Gallery')->delete();
        DB::table('permissions')->where('name', 'Delete Gallery')->delete();
        Schema::dropIfExists('image_galleries');
    }
}
