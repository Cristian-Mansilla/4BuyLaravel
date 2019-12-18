<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    public $table = 'ciudades';
    protected $fillable = [
        'nombre_ciudad', 'provincia_id',
    ];
}
