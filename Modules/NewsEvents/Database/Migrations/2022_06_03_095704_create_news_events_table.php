<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateNewsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->string('image')->nullable();
            $table->string('bg_image')->nullable();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View NewsEvent',
            'guard_name' => 'web',
            'group' => 'NewsEvent'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add NewsEvent',
            'guard_name' => 'web',
            'group' => 'NewsEvent'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit NewsEvent',
            'guard_name' => 'web',
            'group' => 'NewsEvent'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete NewsEvent',
            'guard_name' => 'web',
            'group' => 'NewsEvent'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View NewsEvent')->delete();
        DB::table('permissions')->where('name', 'Add NewsEvent')->delete();
        DB::table('permissions')->where('name', 'Edit NewsEvent')->delete();
        DB::table('permissions')->where('name', 'Delete NewsEvent')->delete();
        Schema::dropIfExists('news_events');
    }
}
