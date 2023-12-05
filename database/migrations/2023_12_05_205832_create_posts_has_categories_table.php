<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsHasCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_has_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('post');
            $table->unsignedBigInteger('category');

            $table->foreign('post')->references('id')->on('posts');
            $table->foreign('category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_has_categories');
    }
}
