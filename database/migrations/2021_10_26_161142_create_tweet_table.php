<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet', function (Blueprint $table) {
            $table->increments('tweet_id');
            $table->integer('tweet_user_id')->unsigned();
            $table->foreign('tweet_user_id')->references('user_id')->on('user');
            $table->string('tweet_content');
            $table->string('tweet_type');
            $table->integer('tweet_likeCount')->default(0);
            $table->integer('tweet_replyCount')->default(0);
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable()->default(null);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweet');
    }
}
