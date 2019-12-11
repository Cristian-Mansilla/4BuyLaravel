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
        Schema::create('caracteristicas_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('Modelo')->nullable();
            $table->string('Memoria interna')->nullable();
            $table->string('Linea')->nullable();
            $table->string('Ram')->nullable();
            $table->string('Tamaño de pantalla')->nullable();
            $table->string('Resolucion'->nullable());
            $table->string('Capacidad')->nullable();
            $table->string('Tipo de pantalla')->nullable();
            $table->string('Tamaño')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
