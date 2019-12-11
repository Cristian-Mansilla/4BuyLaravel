@extends('layouts.base')

@section('title')
    Productos
    @stop

@section('head')
    <style>
.loader {
    display: none;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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
                <h3>Marca</h3>
                <ul>
                    @foreach ($marcas as $item)
                        <li class="brandLi">
                            <input type="checkbox" class="brand" value="{{$item->id}}">
                            {{$item->nombre_marca}}
                        </li>
                    @endforeach
                </ul>
                <h3>Modelos</h3>
                <ul>
                    @foreach ($modelos as $modelo)
                        <li class="brandLi">
                            <input type="checkbox" class="" value="{{$modelo}}">
                            {{$modelo}}
                        </li>
                    @endforeach
                </ul>
                <h3>Ram</h3>
                <ul>
                    @foreach ($rams as $ram)
                        <li class="brandLi">
                            <input type="checkbox" class="" value="{{$ram}}">
                            {{$ram}}
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

            <div class='col-lg-8 col-12 row border-bottom text-center' id="x">
            </div>
            <div id="loader" class="loader"></div>


    </div>


</main>

@stop

@section('scripts')
<script type="text/javascript">

        $(function(){
            fetchProds();
            $('.brandLi').click(function(){
                fetchProds();

            });

            function fetchProds(){

                var brands = [];
                var pasadoString = [];
                $('.brand').each(function(){
                    if($(this).is(":checked")){
                        brands.push($(this).val());
                    }

                });
                var loc = location.pathname;

                var locArray = loc.split('/');




                if(brands && brands.length){
                    var filtro = brands.toString();
                }else{
                    var filtro = "none";
                }


                console.log('filtro:'+filtro);

                fetch('/Filtro/'+filtro+ "?categoria=" + locArray[3])
                    .then(function(response){
                        console.log('Datos:'+response);
                        return response.json();
                    })
                    .then(function(data){

                        var div = document.getElementById('x');
                        console.log(data);
                        div.innerHTML = '';

                        data.map(function (prod) {
                            const templateLiteral = `
                    <div class='col-12 bg-white sombra mb-2' style="height:150px;">
                        <div class="col-12 row justify-content-between">


                            <div class='col-4 mt-lg-0 mt-md-0 mt-sm-0 mt-4 p-4'>
                                <img src='${prod.ruta_imagen}' class="imgAllProd">
                            </div>
                            <div class='col-8 text-center mt-5 p-1 row justify-content-center'>
                                <a href="/Productos/Detalle/${prod.id} " class='col-12 text-center text-dark'>${prod.titulo}</a>

                                <p class='col-6 color-grey infoAllProd'>$ ${prod.precio}</p>
                                <p class='col-6 color-grey infoAllProd'>Stock: ${prod.stock}</p>

                            </div>

                        </div>
                    </div>`;


                        div.innerHTML = div.innerHTML.concat(templateLiteral);
                        });
                        //document.getElementById('loader').style.display = 'none';


                    })
                    .catch(function(error){
                        console.log(error);
                    })
            }
        });
    </script>
@endsection
