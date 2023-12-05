<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_has_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('post');
            $table->unsignedBigInteger('tag');

            $table->foreign('post')->references('id')->on('posts');
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
        Schema::dropIfExists('posts_has_tags');
    }
}
