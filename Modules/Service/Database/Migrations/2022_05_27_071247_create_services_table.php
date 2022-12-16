<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->longtext('service_full_description')->nullable();
            $table->string('image')->nullable();
            $table->string('service_inner_banner')->nullable();
            $table->tinyInteger('order_row')->default(0);
            $table->boolean('publish')->default(false);
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Service',
            'guard_name' => 'web',
            'group' => 'Service'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Service',
            'guard_name' => 'web',
            'group' => 'Service'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Service',
            'guard_name' => 'web',
            'group' => 'Service'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Service',
            'guard_name' => 'web',
            'group' => 'Service'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Service')->delete();
        Schema::dropIfExists('services');
    }
}
