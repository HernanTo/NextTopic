<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitiesHasPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities_has_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('community');
            $table->unsignedBigInteger('post');
            $table->tinyInteger('is_active');
            $table->timestamps();

            $table->foreign('community')->references('id')->on('communities');
            $table->foreign('post')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities_has_posts');
    }
}
