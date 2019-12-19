<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\compra;
use App\Producto;
use Illuminate\Support\Facades\Auth;

class perfilController extends Controller
{
  public function miPerfil () {
   $compras = [
    //["name" => "Favoritos", "id" => "favoritos-tab", "href" => "#favoritos", "aria-control" => "favoritos"],
    ["name" => "Compras", "id" => "compras-tab", "href" => "#compras", "aria-control" => "compras"],
    ["name" => "Preguntas", "id" => "preguntas-tab", "href" => "#preguntas", "aria-control" => "preguntas"]
  ];
   $config = [
    ["name" => "Mis datos", "id" => "misDatos-tab", "href" => "#misDatos", "aria-control" => "misDatos"],
    //["name" => "Seguridad", "id" => "seguridad-tab", "href" => "#seguridad", "aria-control" => "seguridad"],
    //["name" => "E-mails", "id" => "eMails-tab", "href" => "#eMails", "aria-control" => "eMails"]
  ];
   $tabContent = [
    ["id" => "resumen", "aria-labelledby" => "resumen-tab", "pagina" => "layouts.components.resumen"],
    //["id" => "facturacion", "aria-labelledby" => "facturacion-tab", "pagina" => "pagina externa?"],
    //["id" => "favoritos", "aria-labelledby" => "favoritos-tab", "pagina" => "pagina externa?"],
    ["id" => "compras", "aria-labelledby" => "compras-tab", "pagina" => "layouts.components.misCompras"],
    ["id" => "preguntas", "aria-labelledby" => "preguntas-tab", "pagina" => "layouts.components.preguntas"],
    ["id" => "misDatos", "aria-labelledby" => "misDatos-tab", "pagina" => "layouts.components.misDatos"],
    //["id" => "seguridad", "aria-labelledby" => "favoritos-tab", "pagina" => "pagina externa?"],
    //["id" => "eMails", "aria-labelledby" => "eMails-tab", "pagina" => "pagina externa?"],
  ];
    return view('perfil', compact('compras', 'config', 'tabContent'));
  }

  public function getDatosUser() {
    $usuario = [
      'usuario' => auth()->user()->usuario,
      'nombre' => auth()->user()->nombre,
      'apellido' => auth()->user()->apellido,
      'email' => auth()->user()->email
    ];
    return $usuario;
  }

  public function actualizar()
  {
    //return \auth::user();
    \auth::user()->update([
      'usuario' => request('usuario'),
      'nombre' => request('nombre'),
      'apellido' => request('apellido'),
      'email' => request('email')
    ]);
    //return ['status' => 'ok'];
    return redirect()->route('miPerfil');
  }

  public function misCompras()
  {
    $id = Auth::id();
    $comprasP = compra::where('user_id', '=', $id)->get();
    $compras = [];
    $productos = [];
    foreach($comprasP as $compra){
        $prodsP = explode(',', $compra->productos);
        foreach ($prodsP as $prod){
            $prod = Producto::find($prod);
            array_push($productos, $prod->titulo);
        }
        $comp = [
            'id' => $compra->user_id,
            'productos' => $productos,
        ];
        array_push($compras, $comp);
    }
    return $compras;
  }
}
