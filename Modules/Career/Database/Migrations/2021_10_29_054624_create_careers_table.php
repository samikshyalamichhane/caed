<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('publish_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('no_of_requirement')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('publish')->default(false);
            $table->timestamps();
        });
        // DB::table('permissions')->insert([
        //     'name' => 'View Career',
        //     'guard_name' => 'web',
        //     'group' => 'Career'
        // ]);
        // DB::table('permissions')->insert([
        //     'name' => 'Add Career',
        //     'guard_name' => 'web',
        //     'group' => 'Career'
        // ]);
        // DB::table('permissions')->insert([
        //     'name' => 'Edit Career',
        //     'guard_name' => 'web',
        //     'group' => 'Career'
        // ]);
        // DB::table('permissions')->insert([
        //     'name' => 'Delete Career',
        //     'guard_name' => 'web',
        //     'group' => 'Career'
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::table('permissions')->where('name', 'View Career')->delete();
        // DB::table('permissions')->where('name', 'Add Career')->delete();
        // DB::table('permissions')->where('name', 'Edit Career')->delete();
        // DB::table('permissions')->where('name', 'Delete Career')->delete();
        Schema::dropIfExists('careers');
    }
}
