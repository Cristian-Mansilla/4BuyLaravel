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

    public function productosPorCategoria($categoria){
        $productos = Producto::where('categoria_id', 'LIKE', $categoria)->paginate(10);
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $vac = compact('productos', 'categorias');
        return view('Productos', $vac);
    }
    public function detalleProducto($id){
        $producto = Producto::where('id', 'LIKE', $id)->get();
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $vac = compact('producto', 'categorias');
        return view('detalleProducto', $vac);
    }

    public function busqueda(Request $form){
        $productos = Producto::where('titulo', 'Like', '%' . $form['categoria'] . '%')->paginate(10);
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $vac = compact('productos', 'categorias');
        return view('Productos', $vac);
    }
    public function ofertas(){
        $productos = Producto::where('oferta', 'like', '1')->paginate(10);
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $vac = compact('productos', 'categorias');
        return view('Productos', $vac);
    }
}
