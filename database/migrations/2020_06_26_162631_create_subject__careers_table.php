<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject__careers', function (Blueprint $table) {
          $table->increments('subject_id');
          $table->string('name',150);
          $table->string('description',500);
          $table->integer('career_id')->unsigned();
          $table->foreign('career_id')->references('career_id')->on('careers');
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
        Schema::dropIfExists('subject__careers');
    }
}
