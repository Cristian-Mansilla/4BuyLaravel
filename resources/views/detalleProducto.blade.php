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
    <div class="col-12 text-center bg-white ">
        <h4>Descripción</h4>

        {{-- {{$producto[0]->info}} --}}

        @if($producto[0]->info->Modelo)
        Modelo: {{$producto[0]->info->Modelo}}
        @endif
        <br>
        @if($producto[0]->info->Ram)
        Ram: {{$producto[0]->info->Ram}}
        @endif
        <br>
        @if($producto[0]->info->Memoria_interna)
        Memoria interna :{{$producto[0]->info->Memoria_interna}}
        @endif
        <br>
        @if($producto[0]->info->Linea)
        Linea: {{$producto[0]->info->Linea}}
        @endif

    </div>

</main>

@stop
