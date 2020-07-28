<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
          $table->increments('evaluation_id');
          $table->integer('subject_id')->unsigned();
          $table->foreign('subject_id')->references('subject_id')->on('subjects');
          $table->integer('unity');
          $table->string('description');
          $table->string('type');
          $table->double('quantity');
          $table->double('max_score');
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
        Schema::dropIfExists('evaluations');
    }
}
