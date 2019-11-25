<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriasToCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categorias')->insert([
            ['nombre_categoria' => 'Celulares y Telefonos', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Electrónica, Audio y Video', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Computacion', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Hogar', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Consolas y Videojuegos', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Deportes y Fitness', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Herramientas y Construccion', 'subcategoria_id' => NULL],
            ['nombre_categoria' => 'Televisores', 'subcategoria_id' => 2],
            ['nombre_categoria' => 'Audio', 'subcategoria_id' => 2],
            ['nombre_categoria' => 'Cables', 'subcategoria_id' => 2],
            ['nombre_categoria' => 'Accesorios para Celulares', 'subcategoria_id' => 1],
            ['nombre_categoria' => 'Celulares', 'subcategoria_id' => 1],
            ['nombre_categoria' => 'Almacenamiento', 'subcategoria_id' => 3],
            ['nombre_categoria' => 'Componentes de PC', 'subcategoria_id' => 3],
            ['nombre_categoria' => 'Computadoras', 'subcategoria_id' => 3],
            ['nombre_categoria' => 'Monitores', 'subcategoria_id' => 3],
            ['nombre_categoria' => 'Mouses', 'subcategoria_id' => 3],
            ['nombre_categoria' => 'Bazar y Cocina', 'subcategoria_id' => 4],
            ['nombre_categoria' => 'Colchones y Sommiers', 'subcategoria_id' => 4],
            ['nombre_categoria' => 'Iluminacion para el Hogar', 'subcategoria_id' => 4],
            ['nombre_categoria' => 'Consolas', 'subcategoria_id' => 5],
            ['nombre_categoria' => 'Videojuegos', 'subcategoria_id' => 5],
            ['nombre_categoria' => 'Boxeo', 'subcategoria_id' => 6],
            ['nombre_categoria' => 'Basquet', 'subcategoria_id' => 6],
            ['nombre_categoria' => 'Futbol', 'subcategoria_id' => 6],
            ['nombre_categoria' => 'Golf', 'subcategoria_id' => 6],
            ['nombre_categoria' => 'Tenis', 'subcategoria_id' => 6],
            ['nombre_categoria' => 'Aberturas', 'subcategoria_id' => 7],
            ['nombre_categoria' => 'Electricidad', 'subcategoria_id' => 7],
            ['nombre_categoria' => 'Herramientas', 'subcategoria_id' => 7],
            ['nombre_categoria' => 'Pintureria', 'subcategoria_id' => 7],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categorias', function (Blueprint $table) {
            //
        });
    }
}
