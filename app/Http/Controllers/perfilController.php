<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class perfilController extends Controller
{
  public function miPerfil () {
   $compras = [
    ["name" => "Favoritos", "id" => "favoritos-tab", "href" => "#favoritos", "aria-control" => "favoritos"],
    ["name" => "Compras", "id" => "compras-tab", "href" => "#compras", "aria-control" => "compras"],
    ["name" => "Preguntas", "id" => "preguntas-tab", "href" => "#preguntas", "aria-control" => "preguntas"]
  ];
   $config = [
    ["name" => "Mis datos", "id" => "misDatos-tab", "href" => "#misDatos", "aria-control" => "misDatos"],
    ["name" => "Seguridad", "id" => "seguridad-tab", "href" => "#seguridad", "aria-control" => "seguridad"],
    ["name" => "E-mails", "id" => "eMails-tab", "href" => "#eMails", "aria-control" => "eMails"]
  ];
   $tabContent = [
    ["id" => "resumen", "aria-labelledby" => "resumen-tab", "pagina" => "pagina externa?"],
    //["id" => "facturacion", "aria-labelledby" => "facturacion-tab", "pagina" => "pagina externa?"],
    //["id" => "favoritos", "aria-labelledby" => "favoritos-tab", "pagina" => "pagina externa?"],
    //["id" => "compras", "aria-labelledby" => "compras-tab", "pagina" => "pagina externa?"],
    //["id" => "preguntas", "aria-labelledby" => "preguntas-tab", "pagina" => "pagina externa?"],
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
    $updateUsuario = [
      'usuario' => request('usuario'),
      'nombre' => request('nombre'),
      'apellido' => request('apellido'),
      'email' => request('email')
    ];
    return $updateUsuario;
  }
}
