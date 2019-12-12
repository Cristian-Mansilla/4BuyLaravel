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
        $productos = $prod->get();
        }else{
            $productos = [];
        }
        $marcas = [];
        $modelos = [];
        $rams = [];
        $memoriaInternas = [];
        $lineas = [];
        $tamañoPantallas = [];
        $resoluciones = [];
        $capacidades = [];
        $tipoDePantallas = [];
        $tamaños = [];
        foreach($productos as $item){

            array_push($marcas, $item->marca);

            if(isset($item->info)){

                if(isset($item->info->Modelo)){
                    if(!in_array($item->info->Modelo, $modelos)){
                        array_push($modelos, $item->info->Modelo);
                    }
                }

                if(isset($item->info->Ram)){
                    if(!in_array($item->info->Ram, $rams)){
                        array_push($rams, $item->info->Ram);
                    }
                }

                if(isset($item->info->Memoria_interna)){
                    if(!in_array($item->info->Memoria_interna, $memoriaInternas)){
                        array_push($memoriaInternas, $item->info->Memoria_interna);
                    }
                }

                if(isset($item->info->Linea)){
                    if(!in_array($item->info->Linea, $lineas)){
                        array_push($lineas, $item->info->Linea);
                    }
                }

                if(isset($item->info->Tamaño_de_pantalla)){
                    if(!in_array($item->info->Tamaño_de_pantalla, $tamañoPantallas)){
                        array_push($tamañoPantallas, $item->info->Tamaño_de_pantalla);
                    }
                }

                if(isset($item->info->Resolucion)){
                    if(!in_array($item->info->Resolucion, $resoluciones)){
                        array_push($resoluciones, $item->info->Resolucion);
                    }
                }

                if(isset($item->info->Capacidad)){
                    if(!in_array($item->info->Capacidad, $capacidades)){
                        array_push($capacidades, $item->info->Capacidad);
                    }
                }

                if(isset($item->info->Tipo_de_pantalla)){
                    if(!in_array($item->info->Tipo_de_pantalla, $modelos)){
                        array_push($modelos, $item->info->Tipo_de_pantalla);
                    }
                }

                if(isset($item->info->Tamaño)){
                    if(!in_array($item->info->Tamaño, $tamaños)){
                        array_push($tamaños, $item->info->Tamaño);
                    }
                }
            }

        }

        $marcas = array_unique($marcas);
        $modelos = array_unique($modelos);
        $rams = array_unique($rams);
        $memoriaInternas = array_unique($memoriaInternas);
        $lineas = array_unique($lineas);
        $tamañoPantallas = array_unique($tamañoPantallas);
        $resoluciones = array_unique($resoluciones);
        $capacidades = array_unique($capacidades);
        $tipoDePantallas = array_unique($tipoDePantallas);
        $tamaños = array_unique($tamaños);
        $vac = compact('productos', 'marcas', 'modelos', 'rams', 'memoriaInternas', 'lineas', 'tamañoPantallas', 'resoluciones', 'capacidades', 'tipoDePantallas', 'tamaños');
        return view('Productos', $vac);
    }



    public function detalleProducto($id){
        $producto = Producto::where('id', 'LIKE', $id)->get();
        $vac = compact('producto');
        return view('detalleProducto', $vac);
    }

    public function busqueda(Request $form){
        $productos = Producto::where('titulo', 'Like', '%' . $form['categoria'] . '%')->paginate(15);
        $vac = compact('productos');
        return view('Productos', $vac);
    }
    public function ofertas(){
        $productos = Producto::where('oferta', 'like', '1')->paginate(10);
        $vac = compact('productos');
        return view('Productos', $vac);
    }

    public function fetchProd(Request $request,$id){
        $categoria = $request->query('categoria');
        $marcas = explode(',' , $id);
        $cant = count($marcas);
        if($id!='none'){
            $prod = Producto::where(function ($query) use ($marcas, $categoria) {
                return $query->where('categoria_id', '=', 50)
                        ->where('marca_id', '=', '50');
            });

            foreach($marcas as $marca){
                $prod->orWhere(function ($query) use ($marca, $categoria) {
                    return $query->where('categoria_id', '=', $categoria)
                            ->where('marca_id', '=', $marca);
                });
            }
            $productos = $prod->get();
        }else {
            $productos = Producto::where('categoria_id', '=', $categoria)->get();

        }


        return $productos;
    }
}
