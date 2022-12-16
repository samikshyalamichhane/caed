<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurement_notices', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('publish_date')->nullable();
            $table->string('submission_date')->nullable();
            $table->longText('description')->nullable();
            $table->string('notice')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View ProcurementNotice',
            'guard_name' => 'web',
            'group' => 'ProcurementNotice'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add ProcurementNotice',
            'guard_name' => 'web',
            'group' => 'ProcurementNotice'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit ProcurementNotice',
            'guard_name' => 'web',
            'group' => 'ProcurementNotice'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete ProcurementNotice',
            'guard_name' => 'web',
            'group' => 'ProcurementNotice'
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('procurement_notices');
    }

}
