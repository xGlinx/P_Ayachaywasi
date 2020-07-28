<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->increments('student_id');
          $table->string('first_name',150);
          $table->string('last_name',150);
          $table->string('gender',50);
          $table->date('date_birth');
          $table->string('email',150);
          $table->string('phone_number',50);
          $table->string('school',250);
          $table->string('country',250);
          $table->string('city',250);
          $table->string('postal_code',50);
          $table->string('picture',250);
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
        Schema::dropIfExists('students');
    }
}
