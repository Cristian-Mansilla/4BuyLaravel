<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categorias;

class productosController extends Controller
{
    public function todosLosProductos(){
        $productos = Producto::All();
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $vac = compact('productos', 'categorias');
        return view('testProductos', $vac);
    }

    public function productosPorId($id){
        $productos = Producto::where('categoria_id', 'LIKE', $id)->paginate(10);
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $vac = compact('productos', 'categorias');
        return view('testProductos', $vac);
    }
}
