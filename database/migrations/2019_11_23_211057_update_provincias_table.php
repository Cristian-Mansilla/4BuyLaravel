<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provincias', function (Blueprint $table) {
          $table->unsignedBigInteger('pais_id');
          $table->foreign('pais_id')->references('id')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provincias', function (Blueprint $table) {
          $table->dropForeign('provincias_pais_id_foreign');
        });
    }
}
