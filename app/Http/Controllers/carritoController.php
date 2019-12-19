<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Producto;
class carritoController extends Controller
{
    public function addCarrito(Request $request, $id){
        if ($request->session()->has('carrito')) {
            $flag = false;
            $data = session('cantCarrito');
            $data = array_values($data);
            for($i = 0; $i < count($data); $i++){
                if($data[$i]['prod'] == $id){
                    $data[$i]['cantidad'] = $data[$i]['cantidad']+1;
                    $flag = true;
                    session(['cantCarrito' => $data]);
                break;
                }
            }
            if(!$flag){
                $producto = Producto::find($id);
                $request->session()->push('carrito', $producto);
                $request->session()->push('cantCarrito', ['prod' => $id,'cantidad' => 1]);
            }

            return session('carrito');

        }else{
            session(['carrito' => []]);
            session(['cantCarrito' => []]);
            $producto = Producto::find($id);
            $request->session()->push('carrito', $producto);
            $request->session()->push('cantCarrito', ['prod' => $id,'cantidad' => 1]);
        }
        return redirect('/Carrito');

    }

    public function eliminarProdCarrito($id){
        $data = session('carrito');
        $cant = count($data);
        $data = array_values($data);
        for($i = 0; $i < $cant; $i++){
            if($data[$i]->id == $id){
                unset($data[$i]);
                $data = array_values($data);
                session(['carrito' => $data]);
                return ['status' => 'ok'];
            }
        }


        return redirect('Carrito');
    }

    public function vaciarCarrito(){
        session(['carrito' => []]);
        session(['cantCarrito' => []]);
        return ['status' => 'ok'];
    }

    public function carrito(){
        $cantCarrito = session("cantCarrito");
        $vac = compact('cantCarrito');
        return view('carrito', $vac);
    }


    public function getCarrito(){
        $data = session('carrito');
        $data = array_values($data);
        return $data;
    }

    public function cantCarrito(){
        $data = session('cantCarrito');
        $data = array_values($data);
        return $data;
    }
}
