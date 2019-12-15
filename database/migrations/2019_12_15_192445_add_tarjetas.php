<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTarjetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tarjetas')->insert([
                ['numero_tarjeta' => '4111111111111111', 'propietario' => 'NICOLAS MORERO', 'mes_ven' => 11, 'año_ven' => 23],
            ]);
    }
}
