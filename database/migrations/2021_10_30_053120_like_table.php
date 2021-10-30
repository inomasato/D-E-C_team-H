<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table){
            $table->integer('like_user_id')->unsigned();
            $table->foreign('like_user_id')->references('user_id')->on('user');
            $table->integer('like_tweet_id')->unsigned();
            $table->foreign('like_tweet_id')->references('tweet_id')->on('tweet');
        });
    }
    			
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');
    }
}
