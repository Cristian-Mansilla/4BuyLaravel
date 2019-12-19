<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getProds(){
        $productos = Producto::all();
        return $productos;
    }
}
