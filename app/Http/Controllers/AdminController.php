<?php

namespace App\Http\Controllers;

use App\CarProducto;
use App\Pais;
use App\Producto;
use App\Provincia;
use App\Rol;
use App\User;
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

    public function getUsers(){
        $users = User::all();
        $usuarios = [];
        foreach($users as $user){
            $prov = Provincia::find($user->provincia_id);
            $pais = Pais::find($user->pais_id);
            $usuario = [
                'id' => $user->id,
                'nombre' => $user->nombre,
                'apellido' => $user->apellido,
                'usuario' => $user->usuario,
                'email' => $user->email,
                'contraseña' => $user->password,
                'imagen' => $user->img_perfil,
                'provincia' => $prov->nombre_provincia,
                'pais' => $pais->nombre_pais,
            ];
            array_push($usuarios, $usuario);

        }

        return $usuarios;
    }

    public function deleteUser($id){
        User::find($id)->delete();
        return ['status' => 'ok'];
    }

    public function getRoles(){
        $roles = Rol::all();
        $rols = [];
        foreach($roles as $rol){
            $ro = [
                'id' => $rol->id,
                'nombre' => $rol->name,
                'guard_name' => $rol->guard_name,
            ];
            array_push($rols, $ro);
        }
        return $rols;
    }

    public function eliminarRol($id){
        $rol = Rol::find($id)->delete();
        return ['status' => 'ok'];
    }
}
