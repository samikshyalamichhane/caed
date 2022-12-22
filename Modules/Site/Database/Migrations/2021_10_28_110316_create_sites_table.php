<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();

            // Contact and Address
            $table->text('email1')->nullable();
            $table->text('email2')->nullable();
            $table->text('contact1')->nullable();
            $table->text('contact2')->nullable();
            $table->text('volunteer_detail')->nullable();

            // Social Media Links
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twitter')->nullable();

            $table->text('address')->nullable();
            $table->text('map')->nullable();

            // Logos and banner images
            $table->text('aboutus_banner')->nullable();
            $table->text('support_banner')->nullable();
            $table->text('volunteer_banner')->nullable();
            $table->text('vacancy_banner')->nullable();
            $table->string('news_banner')->nullable();
            $table->string('project_report_banner')->nullable();
            $table->string('publication_banner')->nullable();
            $table->string('gallery_banner')->nullable();
            $table->string('contact_banner')->nullable();
            $table->string('partner_banner')->nullable();
            $table->string('resources_banner')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View SiteInfo',
            'guard_name' => 'web',
            'group' => 'Site'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View SiteInfo')->delete();
        Schema::dropIfExists('sites');
    }
}
