@extends('layouts.base')

@section('content')
<div class="container  justify-content-between d-flex " >
    <div class="col-12 justify-content-between row pt-4">
        <div class="col-4 bg-white  sombra">
            <ul class="text-left" >

                @foreach ($categorias as $cate)

                    <li>{{$cate->nombre_categoria}}
                        <ul class=''>

                    @foreach ($cate->subcategorias as $subcat)
                        <li class=''><a class="text-dark text-decoration-none" href='/Productos/{{$subcat->id}}'> {{$subcat->nombre_categoria}} </a></li>

                    @endforeach
                    </ul>
                </li>
                <br>
                @endforeach

            </ul>
        </div>
            <div class='col-8 row border-bottom'>
                @foreach ($productos as $producto)

                    <div class='col-12 mb-2 bg-white sombra'>
                        <a href='' class='col-12 row text-dark '>
                            <div class='col-4 p-4'>
                                <img src='{{asset($producto->ruta_imagen)}}' height='160' width='160'>
                            </div>
                            <div class='col-8 p-5 row'>
                                <h4 class='col-12'>{{$producto->titulo}}</h4>
                                <h2 class='col-5'>$ {{$producto->precio}}</h2>
                                <h4 class='col-5'>En stock: {{$producto->stock}}</h4>

                            </div>
                        </a>
                    </div>




                @endforeach
            </div>
            <div class="col-12 justify-content-center d-flex mt-3">{{ $productos->links() }}</div>
    </div>



</div>

@stop
