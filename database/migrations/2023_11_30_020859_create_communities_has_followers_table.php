<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitiesHasFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities_has_followers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('community');
            $table->unsignedBigInteger('user');
            $table->timestamps();

            $table->foreign('community')->references('id')->on('communities');
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
        Schema::dropIfExists('communities_has_followers');
    }
}
