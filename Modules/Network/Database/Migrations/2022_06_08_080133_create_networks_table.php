<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Network',
            'guard_name' => 'web',
            'group' => 'Network'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Network',
            'guard_name' => 'web',
            'group' => 'Network'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Network',
            'guard_name' => 'web',
            'group' => 'Network'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Network',
            'guard_name' => 'web',
            'group' => 'Network'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('networks');
    }
}
