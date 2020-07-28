<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscription', function (Blueprint $table) {
          $table->increments('suscription_id');
          $table->string('title',150);
          $table->text('description');
          $table->decimal('price',8,2);
          $table->string('mesure',50);
          $table->integer('duration');
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
        Schema::dropIfExists('suscription');
    }
}
