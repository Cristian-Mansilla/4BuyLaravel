<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\compra;
use App\Producto;
use App\tarjeta;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(isset($_COOKIE['ultimaVisita'])){
            $cate = $_COOKIE['ultimaVisita'];
        }else{
            $cate = 11;
        }
        $prodMasVendidos = Producto::where('categoria_id', 'LIKE', 12)->orWhere('categoria_id', 'LIKE', 11)->orwhere('categoria_id', 'LIKE', 8)->get();
        $prodUltimaVisita = Producto::where('categoria_id', 'LIKE', $cate)->orWhere('categoria_id', 'LIKE', 11)->orWhere('categoria_id', 'LIKE', 12)->get();
        $vac = compact('prodMasVendidos', 'prodUltimaVisita');
        return view('home', $vac);
    }

    public function construccion(){
        return view('construccion');
    }

    public function test(){
        $producto = Producto::find(1);

        $vac = compact('producto');
        return view('test', $vac);
    }

    public function pago($precio){
        $carrito = session('carrito');
        $prods = [];
        foreach($carrito as $prod){
            array_push($prods, $prod->id);
        }
        $prods = implode(',', $prods);
        $vac = compact('prods', 'precio');

        return view('pago', $vac);
    }

    public function procesar(Request $request, $datos){

        $datos = explode(',', $datos);
        $numeroTarjeta = $datos[0];
        $propietario = $datos[1];
        $cvc = $datos[2];
        $mesVen = $datos[3];
        $añoVen = $datos[4];





        $tarjetas = tarjeta::All();

        foreach($tarjetas as $tarjeta){
            if($tarjeta->numero_tarjeta == $numeroTarjeta && $tarjeta->propietario == $propietario && $tarjeta->cvc == $cvc && $tarjeta->mes_ven == $mesVen && $tarjeta->año_ven == $añoVen){
                session(['carrito' => []]);
                session(['cantCarrito' => []]);

                $compra = new compra;
                $compra->user_id = Auth::id();
                $compra->productos = $request->query('productos');
                $compra->save();

                return ['status' => 'ok'];
            }
        }

        return ['status' => 'no'];
    }



}
