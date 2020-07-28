<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
          $table->increments('ach_id');
          $table->integer('student_id')->unsigned();
          $table->foreign('student_id')->references('student_id')->on('students');
          $table->string('name',150);
          $table->string('description',500);
          $table->date('date');
          $table->string('reference',150);
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
        Schema::dropIfExists('achievements');
    }
}
