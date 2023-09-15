<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital', function (Blueprint $table) {
            $table->increments('hospital_id');
            $table->string('hospital_name');
            $table->string('hospital_master');
            $table->string('hospital_loginId');
            $table->string('hospital_mail');
            $table->string('hospital_password');
            $table->integer('user_likeCount')->unsigned();
            $table->integer('user_followCount')->unsigned();
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
        Schema::dropIfExists('hospital');
    }
}
