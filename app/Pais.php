<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public $table = 'paises';

    protected $fillable = [
        'nombre_pais',
    ];

    public function provincias(){
        return $this->hasMany('App\Provincia');
    }
}
