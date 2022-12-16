<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('description')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Announcement',
            'guard_name' => 'web',
            'group' => 'Announcement'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Announcement',
            'guard_name' => 'web',
            'group' => 'Announcement'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Announcement',
            'guard_name' => 'web',
            'group' => 'Announcement'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Announcement',
            'guard_name' => 'web',
            'group' => 'Announcement'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
