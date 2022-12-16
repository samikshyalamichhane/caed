<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publicationCategory_id');
            $table->foreign('publicationCategory_id')->references('id')->on('publication_categories')->onDelete('cascade');
            $table->string('publication_sub_category')->nullable();
            $table->string('publish')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication_sub_categories');
    }
}
