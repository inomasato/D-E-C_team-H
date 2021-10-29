<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_trueName');
            $table->string('user_nickName');
            $table->string('user_profile')->default(null);
            $table->string('user_sick');
            $table->string('user_loginId');
            $table->string('user_password');
            $table->integer('user_likeCount')->default(0);
            $table->integer('user_followCount')->default(0);
            $table->timestamps();
            $table->datetime('deleted_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
