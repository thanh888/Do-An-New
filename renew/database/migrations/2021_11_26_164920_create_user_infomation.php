<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfomation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infomation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('name');
            $table->string('favourite');
            $table->string('linkfb');
            $table->string('gender');
            $table->string('image');
            $table->string('number_phone');
            $table->string('location');
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
        Schema::dropIfExists('user_infomation');
    }
}