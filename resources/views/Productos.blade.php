@extends('layouts.base')

@section('content')
<main class="container  justify-content-lg-between justify-content-center " >
    <div class="col-12 justify-content-lg-between justify-content-center row pt-4">
        <div class="col-4 bg-white  sombra d-lg-block d-none">
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
            <div class='col-lg-8 col-12 row border-bottom text-center'>
                @foreach ($productos as $producto)

                    <div class='col-12 bg-white sombra mb-2' style="height:150px;">
                        <div class="col-12 row justify-content-between">


                            <div class='col-4 mt-lg-0 mt-md-0 mt-sm-0 mt-4 p-4'>
                                <img src='{{$producto->ruta_imagen}}' class="imgAllProd">
                            </div>
                            <div class='col-8 text-center mt-5 p-1 row justify-content-center'>
                                <a href="/Productos/Detalle/{{$producto->id}} " class='col-12 text-center text-dark'>{{$producto->titulo}}</a>

                                <p class='col-6 color-grey infoAllProd'>$ {{$producto->precio}}</p>
                                <p class='col-6 color-grey infoAllProd'>Stock:{{$producto->stock}}</p>

                            </div>

                        </div>
                    </div>




                @endforeach

            </div>

    </div>

    <div class="col-12 justify-content-center d-flex">{{ $productos->appends($_GET)->links() }}</div>


</main>

@stop
