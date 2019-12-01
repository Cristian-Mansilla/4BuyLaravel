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
        $categorias = Categorias::whereNull('subcategoria_id')->get();
        $cate = $_COOKIE['ultimaVisita'];
        $prodMasVendidos = Producto::where('categoria_id', 'LIKE', 12)->paginate(5);
        $prodUltimaVisita = Producto::where('categoria_id', 'LIKE', $cate)->paginate(5);
        $vac = compact('categorias', 'prodMasVendidos', 'prodUltimaVisita');
        return view('home', $vac);
    }
}
