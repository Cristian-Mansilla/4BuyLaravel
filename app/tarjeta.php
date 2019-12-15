<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarjeta extends Model
{
    public $table = 'tarjetas';
    protected $fillable = [
        'numero_tarjeta', 'propietario', 'mes_ven', 'año_ven', 'cvc',
    ];
}
