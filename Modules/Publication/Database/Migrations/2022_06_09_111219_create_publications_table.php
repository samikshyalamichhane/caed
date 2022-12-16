<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{

    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('date')->nullable();
            $table->string('file')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Publications',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Publications',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Publications',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Publications',
            'guard_name' => 'web',
            'group' => 'Publication'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Publications')->delete();
        DB::table('permissions')->where('name', 'Add Publications')->delete();
        DB::table('permissions')->where('name', 'Edit Publications')->delete();
        DB::table('permissions')->where('name', 'Delete Publications')->delete();
        Schema::dropIfExists('publications');
    }
}
