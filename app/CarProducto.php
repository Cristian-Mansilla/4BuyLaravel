<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarProducto extends Model
{
    protected $fillable = [
        'user_id', 'Modelo', 'Memoria_interna', 'Linea', 'Ram', 'Tamaño_de_pantalla', 'Resolucion', 'Capcidad', 'Tipo_de_pantalla', 'Tamaño',
    ];

    public $table = 'caracteristicas_productos';
}
