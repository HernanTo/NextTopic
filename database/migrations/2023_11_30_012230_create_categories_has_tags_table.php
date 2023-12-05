<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_has_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('tag');

            $table->foreign('category')->references('id')->on('categories');
            $table->foreign('tag')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_has_tags');
    }
}
