<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
class categoriasController extends Controller
{
    public function menuCategorias(){

        $categorias = Categorias::where('subcategoria_id', '=', null)->get();
        $ruta = '/Categorias/Menu/';
        $vac = compact('categorias', 'ruta');
        return view('menuCategorias', $vac);
    }

    public function menuSubcategorias($id){
        $cate = Categorias::find($id);
        $categorias = $cate->subcategorias;
        $ruta = '/Productos/Categoria/';
        $vac = compact('categorias', 'ruta');
        return view('menuCategorias', $vac);
    }
}
