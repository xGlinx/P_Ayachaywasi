<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('path__subjects', function (Blueprint $table) {
          $table->increments('path_subject_id');
          $table->integer('path_id')->unsigned();
          $table->foreign('path_id')->references('path_id')->on('paths');
          $table->integer('subject_id')->unsigned();
          $table->foreign('subject_id')->references('subject_id')->on('subjects');
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
        Schema::dropIfExists('path__subjects');
    }
}
