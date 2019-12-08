<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categorias;

class productosController extends Controller
{
    public function todosLosProductos(){
        $productos = Producto::All();
        $vac = compact('productos');
        return view('testProductos', $vac);
    }

    public function productosPorCategoria($categoria){
        setcookie('ultimaVisita', $categoria, time() + (86400 * 30), "/");
        $cate = Categorias::find($categoria);
        if($cate){
            $prod = Producto::where('categoria_id', 'LIKE', $cate->id);

        foreach ($cate->subcategorias as $key) {

            // ->where('field_1', red_1); // Desired output
            $prod->orWhere('categoria_id', 'LIKE', $key->id);

        }
        $productos = $prod->paginate(10);
        }else{
            $productos = [];
        }
        $marcas = [];
        foreach($productos as $item){
            if(!in_array($item->marca, $marcas)){
                array_push($marcas, $item->marca);
            }
        }
        $marcas = array_unique($marcas);
        $vac = compact('productos', 'marcas');
        return view('Productos', $vac);
    }



    public function detalleProducto($id){
        $producto = Producto::where('id', 'LIKE', $id)->get();
        $vac = compact('producto');
        return view('detalleProducto', $vac);
    }

    public function busqueda(Request $form){
        $productos = Producto::where('titulo', 'Like', '%' . $form['categoria'] . '%')->paginate(10);
        $vac = compact('productos');
        return view('Productos', $vac);
    }
    public function ofertas(){
        $productos = Producto::where('oferta', 'like', '1')->paginate(10);
        $vac = compact('productos');
        return view('Productos', $vac);
    }
}
