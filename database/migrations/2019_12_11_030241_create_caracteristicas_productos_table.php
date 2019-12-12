<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Modelo')->nullable();
            $table->string('Memoria_interna')->nullable();
            $table->string('Linea')->nullable();
            $table->string('Ram')->nullable();
            $table->string('Tamaño_de_pantalla')->nullable();
            $table->string('Resolucion')->nullable();
            $table->string('Capacidad')->nullable();
            $table->string('Tipo_de_pantalla')->nullable();
            $table->string('Tamaño')->nullable();
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
        Schema::dropIfExists('caracteristicas_productos');
    }
}
