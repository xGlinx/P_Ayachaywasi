<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('first_name',150);
            $table->string('last_name',150);
            $table->string('name_id',150);
            $table->string('number_id',150);
            $table->string('title',150);
            $table->text('presentation');
            $table->string('email',250);
            $table->string('linkedin',250);
            $table->string('phone_number',50);
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
        Schema::dropIfExists('teachers');
    }
}
