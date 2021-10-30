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
            $table->char('user_iconText',7)->default('#FFFFFF');
            $table->char('user_iconFrame',7)->default('#C4C4C4');
            $table->char('user_iconBack',7)->default('#2FBEC7');
            $table->integer('user_likeCount')->default(0);
            $table->integer('user_followCount')->default(0);
            // $table->integer('user_hospital_id')->unsigned();
            // $table->foreign('user_hospital_id')->references('hospital_id')->on('hospital');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable()->default(null);
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
