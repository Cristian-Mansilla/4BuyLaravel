<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';

    protected $fillable = [
        'titulo', 'precio', 'stock', 'ruta_imagen', 'marca_id', 'categoria_id',
    ];

    public function marca(){
        return $this->belongsTo('App\Marca', 'marca_id');
    }

    public function categoria(){
        return $this->belongsTo('App\Categorias', 'categoria_id');
    }

}
