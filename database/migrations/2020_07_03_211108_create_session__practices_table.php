<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionPracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session__practices', function (Blueprint $table) {
          $table->increments('practice_id');
          $table->integer('session_id')->unsigned();
          $table->foreign('session_id')->references('session_id')->on('sessions');
          $table->string('title');
          $table->string('description');
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
        Schema::dropIfExists('session__practices');
    }
}
