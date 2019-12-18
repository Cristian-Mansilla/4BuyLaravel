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
        <div class="col-4  sombra d-lg-block d-none row">
            <h3 class="mt-2">Ordenar por</h3>
            <select name="cars" id="precio">
                <option value="relevancia" class="brandLi">Relevancia</option>
                <option value="menor" class="brandLi">Menor precio</option>
                <option value="mayor" class="brandLi">Mayor precio</option>
              </select>
            <div id="brands-list" class="mt-2">
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
