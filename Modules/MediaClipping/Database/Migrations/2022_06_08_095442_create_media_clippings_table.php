<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaClippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_clippings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('date')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View MediaClipping',
            'guard_name' => 'web',
            'group' => 'MediaClipping'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add MediaClipping',
            'guard_name' => 'web',
            'group' => 'MediaClipping'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit MediaClipping',
            'guard_name' => 'web',
            'group' => 'MediaClipping'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete MediaClipping',
            'guard_name' => 'web',
            'group' => 'MediaClipping'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_clippings');
    }
}
