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
        foreach($productos as $item){
            array_push($marcas, $item->marca);
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
        $productos = Producto::where('titulo', 'Like', '%' . $form['categoria'] . '%')->paginate(15);
        $vac = compact('productos');
        return view('Productos', $vac);
    }
    public function ofertas(){
        return view('Ofertas');
    }

    public function getOfertasProd(Request $request){
        $ordenarPor = $request->query('precio');

        if($ordenarPor == 'mayor'){
            $prod = Producto::where('oferta', '!=', '0')->orderBy('precio', 'DESC')->get();
        }elseif ($ordenarPor == 'menor'){
            $prod = Producto::where('oferta', '!=', '0')->orderBy('precio', 'ASC')->get();
        }else{
            $prod = Producto::where('oferta', '!=', '0')->orderBy('id', 'ASC')->get();
        }

        return $prod;
    }

    public function fetchProd(Request $request,$marca){
        $categoria = explode(',' ,$request->query('categoria'));
        $ordenarPor =  $request->query('precio');
        $marcas = explode(',' , $marca);




        if($marca!='none'){
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

            if($ordenarPor == 'mayor'){
                $productos = $prod->orderBy('precio', 'DESC')->get();
            }elseif($ordenarPor == 'menor'){
                $productos = $prod->orderBy('precio', 'ASC')->get();
            }else{
                $productos = $prod->orderBy('id', 'ASC')->get();
            }
        }else {
            if($ordenarPor == 'mayor'){
                $productos = Producto::where('categoria_id', '=', $categoria)->orderBy('precio', 'DESC')->get();
            }elseif ($ordenarPor == 'menor'){
                $productos = Producto::where('categoria_id', '=', $categoria)->orderBy('precio', 'ASC')->get();
            }else{
                $productos = Producto::where('categoria_id', '=', $categoria)->orderBy('id', 'ASC')->get();
            }

        }



        $i = 0;
        $prodFinales = [];

        foreach($productos as $prod){
            array_push($prodFinales, $prod);
        }

        // while($i < count($prodFinales)){
        //     if($prodFinales[$i]->info->Linea !== 'Redmi'){
        //         unset($prodFinales[$i]);
        //     }
        //      if($productos[$i]->info->Memoria_interna !== '32 GB'){
        //           unset($productos[$i]);
        //       }

        //     $i++;

        // }






        return $prodFinales;
    }
}
