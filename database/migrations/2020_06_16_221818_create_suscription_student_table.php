<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptionStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscription_student', function (Blueprint $table) {
          $table->increments('suscription_student_id');
          $table->integer('suscription_id')->unsigned();
          $table->foreign('suscription_id')->references('suscription_id')->on('suscription');
          $table->integer('student_id')->unsigned();
          $table->foreign('student_id')->references('student_id')->on('students');
          $table->date('start_date');
          $table->date('end_date');
          $table->string('method');
          $table->boolean('status_payment');
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
        Schema::dropIfExists('suscription_student');
    }
}
