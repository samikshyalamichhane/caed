<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateApproachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approaches', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Approach',
            'guard_name' => 'web',
            'group' => 'Approach'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Approach',
            'guard_name' => 'web',
            'group' => 'Approach'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Approach',
            'guard_name' => 'web',
            'group' => 'Approach'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Approach',
            'guard_name' => 'web',
            'group' => 'Approach'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Approach')->delete();
        DB::table('permissions')->where('name', 'Add Approach')->delete();
        DB::table('permissions')->where('name', 'Edit Approach')->delete();
        DB::table('permissions')->where('name', 'Delete Approach')->delete();
        Schema::dropIfExists('approaches');
    }
}
