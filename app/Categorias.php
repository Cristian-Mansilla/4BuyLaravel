<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{

    public function subcategorias(){
        return $this->hasMany('App\Categorias', 'subcategoria_id');
    }

    protected $fillable = [
        'nombre_categoria', 'subcategoria_id',
    ];
}
