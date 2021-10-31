<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->increments('reply_id');
            $table->integer('reply_tweet_id')->unsigned();
            $table->foreign('reply_tweet_id')->references('tweet_id')->on('tweet');
            $table->integer('reply_user_id')->unsigned();
            $table->foreign('reply_user_id')->references('user_id')->on('user');
            $table->integer('reply_template_id')->unsigned();
            $table->foreign('reply_template_id')->references('template_id')->on('template');
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
        Schema::dropIfExists('reply');
    }
}
