@extends('layouts.base')

@section('content')
<div class="container  justify-content-between d-flex " >
    <div class="col-12 justify-content-between row pt-4">
        <div class="col-4 bg-white  sombra">
            <ul class="text-left" >

                @foreach ($categorias as $cate)

                    <li class="text-dark">{{$cate->nombre_categoria}}
                        <ul class=''>

                    @foreach ($cate->subcategorias as $subcat)
                        <li class=''><a class="color-grey text-decoration-none" href='/Productos/Categoria/{{$subcat->id}}'> {{$subcat->nombre_categoria}} </a></li>

                    @endforeach
                    </ul>
                </li>
                <br>
                @endforeach

            </ul>
        </div>
            <div class='col-8 row border-bottom'>
                @foreach ($productos as $producto)

                    <div class='col-12 bg-white sombra mb-2' style="height:150px;">
                        <div class="col-12 row">


                            <div class='col-4 p-4'>
                                <img src='{{$producto->ruta_imagen}}' height='100' width='100'>
                            </div>
                            <div class='col-8 text-center mt-5 p-1 row justify-content-center'>
                                <a href="/Productos/Detalle/{{$producto->id}} " class='col-12 text-center text-dark'>{{$producto->titulo}}</a>

                                <h6 class='col-5 color-grey'>$ {{$producto->precio}}</h6>
                                <h6 class='col-5 color-grey'>En stock: {{$producto->stock}}</h6>

                            </div>

                      </div>
                    </div>




                @endforeach
            </div>
            <div class="col-12 justify-content-center d-flex mt-3">{{ $productos->links() }}</div>
    </div>



</div>

@stop
