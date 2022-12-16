<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundingPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funding_partners', function (Blueprint $table) {
            $table->id();
            $table->string('partner_type')->nullable();
            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('website_link')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View FundingPartner',
            'guard_name' => 'web',
            'group' => 'FundingPartner'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add FundingPartner',
            'guard_name' => 'web',
            'group' => 'FundingPartner'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit FundingPartner',
            'guard_name' => 'web',
            'group' => 'FundingPartner'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete FundingPartner',
            'guard_name' => 'web',
            'group' => 'FundingPartner'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funding_partners');
    }
}
