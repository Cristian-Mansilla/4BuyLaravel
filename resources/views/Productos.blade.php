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
                <p>
                    <label for="amount">Price range:</label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                  </p>

                  <div id="slider-range" id="precioRango"></div>

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
