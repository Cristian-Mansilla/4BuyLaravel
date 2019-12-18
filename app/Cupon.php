<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    public $table = 'cupones';
    protected $fillable = [
        'cupon', 'user_id', 'status',
    ];
}
