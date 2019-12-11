<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Producto;
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





}
