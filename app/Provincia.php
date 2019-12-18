<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
        public $table = 'provincias';
        protected $fillable = [
            'nombre_provincia', 'pais_id',
        ];
}
