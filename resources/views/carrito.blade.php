@extends('layouts.base')

@section('content')
    Carrito de Compras

    @foreach ($data as $prod)
    <div class='container my-5'>
        <div class=' row justify-content-around bg-white p-2'>
          <div class='col-2 pt-2'>
            <img src='{{$prod->ruta_imagen}}' alt='Imagen Producto' height='100'>
          </div>
          <div class='col-10 row justify-content-between'>
            <div class='col-7 mt-4 px-0 infoMercado'>
              <h5>Celular motorola moto g4 32 Gb + 3GB Ram{{$prod->titulo}}</h5>
              <p>Modelo: {{$prod->info->Modelo}} </p>
            </div>
            <div class='col-5 row justify-content-between'>
              <div class='col-4 mt-5'>
                <h4>$ {{$prod->precio}}</h4>
              </div>
              <div class="col-4 mt-5">
                <input type="number" style="width:70%">
              </div>
                <div class='col-4 mt-5'>
                  <a class='bg-primary text-white rounded p-2' href='/Carrito/delete/{{$prod->id}}'>Eliminar</a>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
    @endforeach
@endsection
