<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $table = 'marcas';
    protected $fillable = [
        'nombre_marca'
    ];
}
