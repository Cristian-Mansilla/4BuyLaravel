<?php

namespace App\Http\Controllers;

use App\CarProducto;
use App\Producto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getProds(){
        $prods = Producto::all();
        $productos = [];
        foreach($prods as $prod){

            $array = [
                'id' => $prod->id,
                'titulo' => $prod->titulo,
                'precio' => $prod->precio,
                'stock' => $prod->stock,
                'info' => $prod->info_id,
            ];
            array_push($productos, $array);
        }
        return $productos;
    }

    public function eliminarProd($id){
        Producto::find($id)->delete();
        return ['status' => 'ok'];
    }
}
