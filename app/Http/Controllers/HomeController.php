<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\compra;
use App\Cupon;
use App\Producto;
use App\Provincia;
use App\tarjeta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
        $prodUltimaVisita = Producto::where('categoria_id', 'LIKE', $cate)->get();
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

    public function cupon(){
        return view('canjearCupon');
    }

    public function canjearCupon($cupon){
        $cupones = Cupon::all();
        foreach($cupones as $cup){
            if($cup->cupon == $cupon){
                if($cup->status == false){
                    $cup->status = true;
                    $cup->user_id = Auth::id();
                    $cup->save();
                    return ['status' => 'ok'];
                }else{
                    return['status' => 'no'];
                }
            }
        }
        return ['status' => 'no existe'];
    }

    public function ayuda(){
        return view('Ayuda');
    }

    public function getProvincias($pais){
        $provincias = Provincia::where('pais_id', '=', $pais)->get();
        return $provincias;
    }


    public function contacto(){
        return view('Contacto');
    }
    public function contactoSend(){
        $nombre = Input::get('nombre');
        $email = Input::get('email');
        $mensaje = Input::get('mensaje');

        $contacto = [
            'nombre' => $nombre,
            'email' => $email,
            'mensaje' => $mensaje,
        ];
        $file = "json/contacto.json";
        $json_data = file_get_contents($file);
        $data = json_decode($json_data, true);
        array_push($data, $contacto);

        $json_string = json_encode($data);
        file_put_contents($file, $json_string);
        return redirect('/');
    }
}
