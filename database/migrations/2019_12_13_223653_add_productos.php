<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('productos')->insert([
            ['titulo' => 'Celular 1', 'precio' => 25500, 'stock' => 2, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular1.jpeg', 'marca_id' => 4, 'categoria_id' => 12, 'oferta' => 200, 'info_id' => 1],
            ['titulo' => 'Celular 2', 'precio' => 23400, 'stock' => 3, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular2.jpeg', 'marca_id' => 4, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 2],
            ['titulo' => 'Celular 3', 'precio' => 20000, 'stock' => 5, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular3.jpeg', 'marca_id' => 4, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 3],
            ['titulo' => 'Celular 4', 'precio' => 22980, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular4.jpeg', 'marca_id' => 18, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 4],
            ['titulo' => 'Celular 5', 'precio' => 18050, 'stock' => 7, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular5.jpeg', 'marca_id' => 18, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 5],
            ['titulo' => 'Celular 6', 'precio' => 19000, 'stock' => 2, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular6.jpeg', 'marca_id' => 4, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 6],
            ['titulo' => 'Celular 7', 'precio' => 27000, 'stock' => 3, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular7.jpeg', 'marca_id' => 18, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 7],
            ['titulo' => 'Celular 8', 'precio' => 25131, 'stock' => 5, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular8.jpeg', 'marca_id' => 4, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 8],
            ['titulo' => 'Celular 9', 'precio' => 32322, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular9.jpeg', 'marca_id' => 17, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 9],
            ['titulo' => 'Celular 10', 'precio' => 12322, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular10.jpeg', 'marca_id' => 17, 'categoria_id' => 12, 'oferta' => 0,'info_id' => 10],
            ['titulo' => 'Celular 11', 'precio' => 22322, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular11.jpeg', 'marca_id' => 8, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 11],
            ['titulo' => 'Celular 12', 'precio' => 32100, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular12.jpeg', 'marca_id' => 4, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 12],
            ['titulo' => 'Celular 13', 'precio' => 22500, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular13.jpeg', 'marca_id' => 7, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 13],
            ['titulo' => 'Celular 14', 'precio' => 12300, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular14.jpeg', 'marca_id' => 18, 'categoria_id' => 12, 'oferta' => 0,'info_id' => 14],
            ['titulo' => 'Celular 15', 'precio' => 32322, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/1/12/celular15.jpeg', 'marca_id' => 3, 'categoria_id' => 12, 'oferta' => 0, 'info_id' => 15],
            ['titulo' => 'Accesorio para celular 1', 'precio' => 235, 'stock' => 20, 'ruta_imagen' => '/Imagenes/Productos/1/11/acceCelu1.jpeg', 'marca_id' => 12, 'categoria_id' => 11, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Accesorio para celular 2', 'precio' => 300, 'stock' => 57, 'ruta_imagen' => '/Imagenes/Productos/1/11/acceCelu2.jpeg', 'marca_id' => 12, 'categoria_id' => 11, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Accesorio para celular 3', 'precio' => 250, 'stock' => 23, 'ruta_imagen' => '/Imagenes/Productos/1/11/acceCelu3.jpeg', 'marca_id' => 12, 'categoria_id' => 11, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Accesorio para celular 4', 'precio' => 170, 'stock' => 41, 'ruta_imagen' => '/Imagenes/Productos/1/11/acceCelu4.jpeg', 'marca_id' => 12, 'categoria_id' => 11, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Accesorio para celular 5', 'precio' => 250, 'stock' => 23, 'ruta_imagen' => '/Imagenes/Productos/1/11/acceCelu5.jpeg', 'marca_id' => 12, 'categoria_id' => 11, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Televisor 1', 'precio' => 2356, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/2/8/televisor1.jpeg', 'marca_id' => 8, 'categoria_id' => 8, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Televisor 2', 'precio' => 4520, 'stock' => 3, 'ruta_imagen' => '/Imagenes/Productos/2/8/televisor2.jpeg', 'marca_id' => 1, 'categoria_id' => 8, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Televisor 3', 'precio' => 5283, 'stock' => 5, 'ruta_imagen' => '/Imagenes/Productos/2/8/televisor3.jpeg', 'marca_id' => 4, 'categoria_id' => 8, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Televisor 4', 'precio' => 9820, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/2/8/televisor4.jpeg', 'marca_id' => 8, 'categoria_id' => 8, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Televisor 5', 'precio' => 2039, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/2/8/televisor5.jpeg', 'marca_id' => 1, 'categoria_id' => 8, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Televisor 6', 'precio' => 9257, 'stock' => 4, 'ruta_imagen' => '/Imagenes/Productos/2/8/televisor6.jpeg', 'marca_id' => 4, 'categoria_id' => 8, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Notebook 1', 'precio' => 12000, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/3/15/computadora1.jpeg', 'marca_id' => 2, 'categoria_id' => 15, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Notebook 2', 'precio' => 18999, 'stock' => 3, 'ruta_imagen' => '/Imagenes/Productos/3/15/computadora2.jpeg', 'marca_id' => 9, 'categoria_id' => 15, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Notebook 3', 'precio' => 17800, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/3/15/computadora3.jpeg', 'marca_id' => 4, 'categoria_id' => 15, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Notebook 4', 'precio' => 9870, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/3/15/computadora4.jpeg', 'marca_id' => 11, 'categoria_id' => 15, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Notebook 5', 'precio' => 15000, 'stock' => 6, 'ruta_imagen' => '/Imagenes/Productos/3/15/computadora5.jpeg', 'marca_id' => 10, 'categoria_id' => 15, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Audio 1', 'precio' => 7500, 'stock' => 2, 'ruta_imagen' => '/Imagenes/Productos/2/9/audio1.jpeg', 'marca_id' => 16, 'categoria_id' => 9, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Audio 2', 'precio' => 4000, 'stock' => 30, 'ruta_imagen' => '/Imagenes/Productos/2/9/audio2.jpeg', 'marca_id' => 12, 'categoria_id' => 9, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Audio 3', 'precio' => 9000, 'stock' => 2, 'ruta_imagen' => '/Imagenes/Productos/2/9/audio3.jpeg', 'marca_id' => 12, 'categoria_id' => 9, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Bazar y Cocina 1', 'precio' => 980, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/4/18/bazar1.jpeg', 'marca_id' => 12, 'categoria_id' => 18, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Bazar y Cocina 2', 'precio' => 300, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/4/18/bazar2.jpeg', 'marca_id' => 12, 'categoria_id' => 18, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Bazar y Cocina 3', 'precio' => 790, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/4/18/bazar3.jpeg', 'marca_id' => 12, 'categoria_id' => 18, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Bazar y Cocina 4', 'precio' => 1800, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/4/18/bazar4.jpeg', 'marca_id' => 12, 'categoria_id' => 18, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Bazar y Cocina 5', 'precio' => 600, 'stock' => 1, 'ruta_imagen' => '/Imagenes/Productos/4/18/bazar5.jpeg', 'marca_id' => 12, 'categoria_id' => 18, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Almacenamiento 1', 'precio' => 2000, 'stock' => 2, 'ruta_imagen' => '/Imagenes/Productos/3/13/almacenamiento1.jpeg', 'marca_id' => 14, 'categoria_id' => 13, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Almacenamiento 2', 'precio' => 2900, 'stock' => 3, 'ruta_imagen' => '/Imagenes/Productos/3/13/almacenamiento2.jpeg', 'marca_id' => 15, 'categoria_id' => 13, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Almacenamiento 3', 'precio' => 600, 'stock' => 4, 'ruta_imagen' => '/Imagenes/Productos/3/13/almacenamiento3.jpeg', 'marca_id' => 13, 'categoria_id' => 13, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Cables 1', 'precio' => 380, 'stock' => 190, 'ruta_imagen' => '/Imagenes/Productos/2/10/cable1.jpeg', 'marca_id' => 12, 'categoria_id' => 10, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Cables 2', 'precio' => 590, 'stock' => 100, 'ruta_imagen' => '/Imagenes/Productos/2/10/cable2.jpeg', 'marca_id' => 12, 'categoria_id' => 10, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Cables 3', 'precio' => 700, 'stock' => 23, 'ruta_imagen' => '/Imagenes/Productos/2/10/cable3.jpeg', 'marca_id' => 12, 'categoria_id' => 10, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Cables 4', 'precio' => 200, 'stock' => 12, 'ruta_imagen' => '/Imagenes/Productos/2/10/cable4.jpeg', 'marca_id' => 12, 'categoria_id' => 10, 'oferta' => 0, 'info_id' => null],
            ['titulo' => 'Cables 5', 'precio' => 150, 'stock' => 2, 'ruta_imagen' => '/Imagenes/Productos/2/10/cable5.jpeg', 'marca_id' => 12, 'categoria_id' => 10, 'oferta' => 0, 'info_id' => null],


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
