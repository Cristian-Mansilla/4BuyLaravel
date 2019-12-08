@extends('layouts.base')

@section('title')
    Productos
    @stop


@section('content')
<main class="container  justify-content-lg-between justify-content-center " >
    <div class="col-12 justify-content-lg-between justify-content-center row pt-4">
        <div class="col-4 bg-white  sombra d-lg-block d-none row">
            <div class="list-group">
                <h3>Precio</h3>
                <input type="hidden" id="hidden_minimun_price" value="0">
                <input type="hidden" id="hidden_minimun_price" value="65000">
                <p id="price_show">1000 - 65000</p>
                <div id="price_range"></div>
            </div>
            <div class="list-gorup">
                <h3>Marca</h3>
                @foreach ($marcas as $item)
                    <div class="list-gorup-item checkbox">
                        <label>
                            <input type="checkbox" class="common_selector brand" value="{{$item->id}}">
                            {{$item->nombre_marca}}
                        </label>
                    </div>
                @endforeach

            </div>
        </div>
            @if(empty($productos))
                <h1 class="col-lg-8 col-12 row border-bottom text-center">No se encontraron productos con esa categoria</h1>
            @else
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

            @endif
    </div>
    @if(!empty($productos))
    <div class="col-12 justify-content-center d-flex">{{ $productos->appends($_GET)->links() }}</div>
    @endif

</main>

@stop
