<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session__imgs', function (Blueprint $table) {
          $table->increments('img_id');
          $table->integer('session_id')->unsigned();
          $table->foreign('session_id')->references('session_id')->on('sessions');
          $table->string('title');
          $table->string('picture');
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
        Schema::dropIfExists('session__imgs');
    }
}
