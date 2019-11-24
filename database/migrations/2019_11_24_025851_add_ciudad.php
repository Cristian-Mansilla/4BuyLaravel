<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('ciudades')->insert([
            ['nombre_ciudad' => 'Cordoba', 'provincia_id' => 1],
            ['nombre_ciudad' => 'Buenos Aires', 'provincia_id' => 2],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
