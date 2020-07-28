<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarCamposPath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('paths', function( $table) {
          $table->string('picture', 250)->nullable();
          $table->integer('grade')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('paths', function( $table) {
            $table->dropColumn('picture');
            $table->dropColumn('grade');

        });

    }
}
