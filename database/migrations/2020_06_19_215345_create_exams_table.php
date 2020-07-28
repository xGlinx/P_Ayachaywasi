<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
          $table->increments('exam_id');
          $table->integer('subject_id')->unsigned();
          $table->foreign('subject_id')->references('subject_id')->on('subjects');
          $table->string('name',150);
          $table->integer('max_score');
          $table->integer('aprobe_score');
          $table->string('description',500);
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
        Schema::dropIfExists('exams');
    }
}
