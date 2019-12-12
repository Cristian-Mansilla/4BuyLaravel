@extends('layouts.base')

@section('content')
<br><br>
<main class="container justify-content-center">
    <div class="col-12 row my-3 justify-content-center justify-content-md-between m-0">
        <div class="col-lg-6 col-12 col-md-5 p-0">
            <img src=" {{$producto[0]->ruta_imagen}}" class="sombraS imgProdDetalle p-3 bg-white" alt="Imagen Producto">
        </div>
        <div class="col-lg-5 col-12 col-md-5 col-sm-12 text-left row bg-white p-4 sombraS mt-sm-2 mt-2 mt-lg-0 mt-md-0">
            <div class="col-12 mt-2">
                <p class="tituloProdDetalle"> {{$producto[0]->titulo}}</p>
                <p class="infoProdDetalle">$ {{$producto[0]->precio}} </p>
                <p class="infoProdDetalle">Stock: {{$producto[0]->stock}} </p>
            </div>
            <div class="col-12 infoProdDetalle">
                <p><img src="https://img.icons8.com/cute-clipart/32/000000/bank-card-back-side.png"> Paga en hasta 12 cuotas</p>
                <img src="https://img.icons8.com/cute-clipart/32/000000/visa.png">
                <img src="https://img.icons8.com/color/32/000000/mastercard-logo.png">
                <img src="https://img.icons8.com/color/32/000000/amex.png">
                <br><br>

                <p><img src="https://img.icons8.com/nolan/32/000000/delivery.png"> Envio gratis</p>
            </div>
            <button class="btn searchButton text-white col-12 text-center">Añadir al carrito</button>
        </div>
    </div>
    <br><br>
    <div class="col-12 bg-white row">

        <div class="col-12 border-bottom p-3">
            <h4 class="text-center">Descripción</h4><br><br>
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto deleniti expedita distinctio saepe vitae possimus placeat maiores? Sapiente veniam sit sed reprehenderit tempore at officia id veritatis nobis natus?</p>

        </div>

        <h4 class="col-12 text-center my-5">Características principales</h4>


        <div class="col-12 row justify-content-between">
            @if(isset($producto[0]->info->Modelo)&& !empty($producto[0]->info->Modelo))
            <div class="col-lg-2 text-center col-6">
                <h5>Modelo</h5>
                <p>{{$producto[0]->info->Modelo}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Memoria_interna)&& !empty($producto[0]->info->Memoria_interna))
            <div class="col-lg-2 text-center col-6">
                <h5>Memoria interna</h5>
                <p>{{$producto[0]->info->Memoria_interna}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Linea)&& !empty($producto[0]->info->Linea))
            <div class="col-lg-2 text-center col-6">
                <h5>Linea</h5>
                <p>{{$producto[0]->info->Linea}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Ram)&& !empty($producto[0]->info->Ram))
            <div class="col-lg-2 text-center col-6">
                <h5>Ram</h5>
                <p>{{$producto[0]->info->Ram}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Tamaño_de_pantalla)&& !empty($producto[0]->info->Tamaño_de_pantalla))
            <div class="col-lg-2 text-center col-6">
                <h5>Tamaño de la pantalla</h5>
                <p>{{$producto[0]->info->Tamaño_de_pantalla}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Resolucion)&& !empty($producto[0]->info->Resolucion))
            <div class="col-lg-2 text-center col-6">
                <h5>Resolucion</h5>
                <p>{{$producto[0]->info->Resolucion}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Capacidad)&& !empty($producto[0]->info->Capacidad))
            <div class="col-lg-2 text-center col-6">
                <h5>Capacidad</h5>
                <p>{{$producto[0]->info->Capacidad}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Tipo_de_pantalla)&& !empty($producto[0]->info->Tipo_de_pantalla))
            <div class="col-lg-2 text-center col-6">
                <h5>Tipo de pantalla</h5>
                <p>{{$producto[0]->info->Tipo_de_pantalla}}</p>
            </div>
        @endif

        @if(isset($producto[0]->info->Tamaño)&& !empty($producto[0]->info->Tamaño))
            <div class="col-lg-2 text-center col-6">
                <h5>Tamaño</h5>
                <p>{{$producto[0]->info->Tamaño}}</p>
            </div>
        @endif

        </div>

    </div>

</main>

@stop
