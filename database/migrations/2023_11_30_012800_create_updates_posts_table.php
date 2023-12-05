<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post');
            $table->unsignedBigInteger('user');
            $table->tinyInteger('type_update');
            $table->timestamps();

            $table->foreign('post')->references('id')->on('posts');
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('updates_posts');
    }
}
