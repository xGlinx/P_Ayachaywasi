<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
          $table->increments('session_id');
          $table->integer('subject_id')->unsigned();
          $table->foreign('subject_id')->references('subject_id')->on('subjects');
          $table->integer('bimestry');
          $table->integer('unity');
          $table->integer('number');
          $table->string('title',250);
          $table->string('description',500);
          $table->boolean('visible');
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
        Schema::dropIfExists('sessions');
    }
}
