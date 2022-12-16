<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_reports', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('publish')->default(1);
            $table->string('document')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Projectreport',
            'guard_name' => 'web',
            'group' => 'Projectreport'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Projectreport',
            'guard_name' => 'web',
            'group' => 'Projectreport'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Projectreport',
            'guard_name' => 'web',
            'group' => 'Projectreport'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Projectreport',
            'guard_name' => 'web',
            'group' => 'Projectreport'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Projectreport')->delete();
        DB::table('permissions')->where('name', 'Add Projectreport')->delete();
        DB::table('permissions')->where('name', 'Edit Projectreport')->delete();
        DB::table('permissions')->where('name', 'Delete Projectreport')->delete();
        Schema::dropIfExists('project_reports');
    }
}
