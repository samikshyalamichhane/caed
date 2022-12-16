<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_releases', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('date')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View PressRelease',
            'guard_name' => 'web',
            'group' => 'PressRelease'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add PressRelease',
            'guard_name' => 'web',
            'group' => 'PressRelease'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit PressRelease',
            'guard_name' => 'web',
            'group' => 'PressRelease'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete PressRelease',
            'guard_name' => 'web',
            'group' => 'PressRelease'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('press_releases');
    }
}
