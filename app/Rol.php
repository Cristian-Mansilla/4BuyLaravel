<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = 'roles';

    protected $fillable = [
        'name', 'guard_name',
    ];
}
