@extends('layouts.base')

@section('title')
    Productos
    @stop

@section('head')
<style>
    .loader{
        height: 200px;
        width: 200px;
    }
</style>
@endsection

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
            <div id="brands-list">
                @if (isset($marcas)&& !empty($marcas))
                <h3>Marca</h3>
                <ul>
                    @foreach ($marcas as $item)
                        <li class="brandLi">
                            <input type="checkbox" class="brand" value="{{$item->id}}">
                            {{$item->nombre_marca}}
                        </li>
                    @endforeach
                </ul>
                @endif
                @if (isset($modelos) && !empty($modelos))
                    <h3>Modelos</h3>
                    <ul>
                        @foreach ($modelos as $modelo)
                            <li class="brandLi">
                                <input type="checkbox" class="modelo" value="{{$modelo}}">
                                {{$modelo}}
                            </li>
                        @endforeach
                    </ul>
                @endif
                @if (isset($rams)&& !empty($rams))
                    <h3>Ram</h3>
                    <ul>
                        @foreach ($rams as $ram)
                            <li class="brandLi">
                                <input type="checkbox" class="ram" value="{{$ram}}">
                                {{$ram}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($memoriaInternas)&& !empty($memoriaInternas))
                    <h3>Memoria interna</h3>
                    <ul>
                        @foreach ($memoriaInternas as $memoriaInterna)
                            <li class="brandLi">
                                <input type="checkbox" class="memoriaInterna" value="{{$memoriaInterna}}">
                                {{$memoriaInterna}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($lineas)&& !empty($lineas))
                    <h3>Linea</h3>
                    <ul>
                        @foreach ($lineas as $linea)
                            <li class="brandLi">
                                <input type="checkbox" class="linea" value="{{$linea}}">
                                {{$linea}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($tamañoPantallas)&& !empty($tamañoPantallas))
                    <h3>Tamaño de la Pantalla</h3>
                    <ul>
                        @foreach ($tamañoPantallas as $tamañoPantalla)
                            <li class="brandLi">
                                <input type="checkbox" class="tamañoPantalla" value="{{$tamañoPantalla}}">
                                {{$tamañoPantalla}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($resoluciones)&& !empty($resoluciones))
                    <h3>Resolución</h3>
                    <ul>
                        @foreach ($resoluciones as $resolucion)
                            <li class="brandLi">
                                <input type="checkbox" class="resolucion" value="{{$resolucion}}">
                                {{$resolucion}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($capacidades)&& !empty($capacidades))
                    <h3>Capacidad</h3>
                    <ul>
                        @foreach ($capacidades as $capacidad)
                            <li class="brandLi">
                                <input type="checkbox" class="capacidad" value="{{$capacidad}}">
                                {{$capacidad}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($tipoDePantallas)&& !empty($tipoDePantallas))
                    <h3>Tipo de pantalla</h3>
                    <ul>
                        @foreach ($tipoDePantallas as $tipoDePantalla)
                            <li class="brandLi">
                                <input type="checkbox" class="tipoPantalla" value="{{$tipoDePantalla}}">
                                {{$tipoDePantalla}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($tamaños)&& !empty($tamaños))
                    <h3>Tamaño</h3>
                    <ul>
                        @foreach ($tamaños as $tamaño)
                            <li class="brandLi">
                                <input type="checkbox" class="tamaño" value="{{$tamaño}}">
                                {{$tamaño}}
                            </li>
                        @endforeach
                    </ul>
                @endif


            </div>
        </div>

            <div class='col-lg-8 col-12 row border-bottom text-center' id="x">

            </div>



    </div>


</main>

@stop

@section('scripts')
<script src="{{asset('/js/fetchProd.js')}} "></script>
@endsection
