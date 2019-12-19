@extends('layouts.base')

@section('title')
    Search
@endsection

@section('content')
<main class="container p-2 ">
<h4 class="my-4 text-center">Resultados de la Busqueda</h4>
    @foreach ($productos as $prod)


            <div class='col-11 bg-white sombra mb-2 ml-5' style="height:150px;">
                <div class="col-12 row justify-content-between">


                    <div class='col-md-4 col-3 mt-lg-0 mt-md-0 mt-sm-0 mt-4 p-4'>
                        <img src='{{$prod->ruta_imagen}} ' class="imgAllProd">
                    </div>
                    <div class='col-8 text-center mt-5 p-1 row justify-content-center'>
                        <a href="/Productos/Detalle/{{$prod->id}} " class='col-12 text-center text-dark tituloProdsAll'>{{$prod->titulo}} </a>

                        <p class='col-md-6 col-6 color-grey infoAllProd'>{{$prod->precio}} </p>
                        <p class='col-md-6 col-6 color-grey infoAllProd'>Stock: {{$prod->stock}} </p>

                    </div>

                </div>
            </div>

    @endforeach
</main>
@endsection
