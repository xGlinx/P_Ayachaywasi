<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__paths', function (Blueprint $table) {
          $table->increments('student_path_id');
          $table->integer('path_id')->unsigned();
          $table->foreign('path_id')->references('path_id')->on('paths');
          $table->integer('student_id')->unsigned();
          $table->foreign('student_id')->references('student_id')->on('students');
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
        Schema::dropIfExists('student__paths');
    }
}
