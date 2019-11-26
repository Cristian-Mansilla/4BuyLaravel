@extends('layouts.base')

@section('content')
<div class="container  justify-content-between d-flex " >
                <div class="col-3 ">
                        <ul class="text-left" >

                            @foreach ($categorias as $cate)

                                <li><a class="text-dark text-decoration-none " href=''>{{$cate->nombre_categoria}}</a>
                                    <ul class=''>

                                @foreach ($cate->subcategorias as $subcat)
                                    <li class=''><a class="text-dark text-decoration-none" href=''> {{$subcat->nombre_categoria}} </a></li>
                                @endforeach
                                </ul>
                            </li>
                            @endforeach

                        </ul>
                </div>
                <div class='col-8 row border-bottom ' style='height:220px;'>
                    @foreach ($productos as $producto)
                            {{-- <img src=" {{asset($producto->ruta_imagen)}} " alt="Imagen"> --}}
                            {{-- <h1> Titulo: {{$producto->titulo}} </h1>
                            <h3> Precio: {{$producto->precio}} </h3>
                            <h3> Stock: {{$producto->stock}} </h3>
                            <h3> Marca: {{$producto->marca->nombre_marca}} </h3>
                            <h3> Categoria: {{$producto->categoria->nombre_categoria}} </h3> --}}

                            <div class='col-12 '>
                                <a href='' class='col-12 row text-dark ' style="text-decoration: none;">
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
</div>
<br><br><br><br><br><br>

<div><h1>Fin</h1></div>

@stop
