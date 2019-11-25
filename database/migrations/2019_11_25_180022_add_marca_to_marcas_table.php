<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarcaToMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('marcas')->insert([
            ['nombre_marca' => 'Phillips'],
            ['nombre_marca' => 'Lenovo'],
            ['nombre_marca' => 'Motorola'],
            ['nombre_marca' => 'Samsung'],
            ['nombre_marca' => 'Xiaomi'],
            ['nombre_marca' => 'Nokia'],
            ['nombre_marca' => 'Apple'],
            ['nombre_marca' => 'LG'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marcas', function (Blueprint $table) {
            //
        });
    }
}
