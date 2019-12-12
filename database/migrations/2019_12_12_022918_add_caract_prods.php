<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCaractProds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('car_productos')->insert([
            ['Linea' => 'Galaxy A','Modelo' => 'Galaxy A20','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 5,5" '],
            ['Linea' => 'Galaxy A','Modelo' => 'Galaxy A10','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 5,5" '],
            ['Linea' => 'Galaxy J','Modelo' => 'Galaxy J7','Memoria_interna' => '16 GB','Tamaño_de_pantalla' => ' 5,5" '],
            ['Linea' => 'Redmi','Modelo' => 'Redmi Note 7','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 6,3" '],
            ['Linea' => 'Redmi','Modelo' => 'Redmi Note 8','Memoria_interna' => '64 GB','Tamaño_de_pantalla' => ' 6,3" '],
            ['Linea' => 'Galaxy J','Modelo' => 'Galaxy J2 Core','Memoria_interna' => '16 GB','Tamaño_de_pantalla' => ' 5" '],
            ['Linea' => 'Redmi','Modelo' => 'Redmi Note 8','Memoria_interna' => '64 GB','Tamaño_de_pantalla' => ' 6,3" '],
            ['Linea' => 'Galaxy Note','Modelo' => 'Galaxy Note 8','Memoria_interna' => '64 GB','Tamaño_de_pantalla' => ' 6,3" '],
            ['Linea' => 'BLU A','Modelo' => 'BLU A8','Memoria_interna' => '16 GB','Tamaño_de_pantalla' => ' 4" '],
            ['Linea' => 'BLU Studio','Modelo' => 'BLU Studio View 2019','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 6" '],
            ['Linea' => 'LG K','Modelo' => 'LG K8','Memoria_interna' => '16 GB','Tamaño_de_pantalla' => ' 4" '],
            ['Linea' => 'Galaxy S','Modelo' => 'Galaxy S7','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 5" '],
            ['Linea' => 'iPhone','Modelo' => 'iphone 7','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 4,7" '],
            ['Linea' => 'Huawei Y','Modelo' => 'Huawei Y5','Memoria_interna' => '32 GB','Tamaño_de_pantalla' => ' 5,4" '],
            ['Linea' => 'Motorola One','Modelo' => 'Motorola One','Memoria_interna' => '64 GB','Tamaño_de_pantalla' => ' 5,9" '],

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
