@extends('layouts.base')

@section('title')
    Categorias
    @stop

@section('content')
    <main >
        <ul class="bg-white m-0 p-0">
            @foreach ($categorias as $categoria)
                <li class="heightMenuCate bg-white pt-3 mr-2 pl-5">
                    <a href=" {{$ruta}} {{$categoria->id}} " class="text-dark jsutify-content-between row">
                        <span class="col-10">{{$categoria->nombre_categoria}} </span>
                        <span clas="col-1"><ion-icon name="arrow-dropright"></ion-icon></span>
                    </a>
                </li>
            @endforeach
        </ul>

    </main>


@stop
