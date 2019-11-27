@extends('layouts.base')




@section('content')
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide col-12 p-0" data-ride="carousel" data-delay="3">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" id="caroussel1">

                </div>
                <div class="carousel-item" id="caroussel2">

                </div>
                <div class="carousel-item" id="caroussel3">

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container-fluid ">
            <div class="container">
                <!-- Bannerts Tarjetas -->
                <div class="col-12 justify-content-center d-flex mt-2 ">
                    <img src="{{asset('/Imagenes/Banners/banner_tarjeta1.png')}}" height="100" width="500" alt="Banert Tarjetas 1" class="col-lg-6 col-md-12 sombra p-0 mr-4">
                    <img src="{{asset('/Imagenes/Banners/banner_tarjeta2.png')}}" height="100" width="500" alt="Baner Tarjetas 2" class="col-lg-6 d-lg-block d-sm-none d-md-none d-none p-0 sombra">
                </div>
                <br><br><br>
                <!-- Mas Vendidos -->
                <div class="justify-content-center row">
                        <div class="col-12 row">
                                <h2 class="col-12 border-bottom border-secondary">Lo mas vendido</h2>

                                @foreach($prodMasVendidos as $producto)
                                    <div class='zoom col-lg-3 col-md-12 mt-2 mb-5 text-center' style='height:300px;'>
                                        <a href='#top' class=' text-dark text-decoration-none'>
                                            <div class='card sombra' style='height:300px;'>
                                                <div class='card-img-top p-3'>
                                                    <img src=' {{$producto->ruta_imagen}} ' height='150' alt='...'>
                                                </div>
                                                <div class='card-body border-top'>
                                                    <h5 class='card-title'>{{$producto->titulo}}</h5>
                                                    <p class='card-text'>$ {{$producto->precio}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                        </div>


                        <div class="col-12 row">
                                <h2 class="col-12 border-bottom border-secondary mt-4">Segun tu ultima visita</h2>

                                @foreach($prodUltimaVisita as $producto)
                                    <div class='zoom col-lg-3 col-md-12 mt-2 mb-5 p-3 text-center' style='height:300px;'>
                                        <a href='#top' class=' text-dark text-decoration-none'>
                                            <div class='card sombra' style='height:300px;'>
                                                <div class='card-img-top p-3'>
                                                    <img src=' {{$producto->ruta_imagen}} ' height='150' alt='...'>
                                                </div>
                                                <div class='card-body'>
                                                    <h5 class='card-title'>{{$producto->titulo}}</h5>
                                                    <p class='card-text'>$ {{$producto->precio}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                        </div>


                </div>
                <!-- CATEGORIAS MAS BUSCADAS -->
                <div class="row justify-content-center">
                        <h2 class="text-center col-12">CATEGORIAS MAS BUSCADAS</h2>
                        <br><br>

                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=computadoras"><img  src=" {{ url('/Imagenes/Index/Categorias/Laptop.png') }} " class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Notebooks</p>
                            </div></a>
                        </div>
                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias" >
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=celulares"><img  src="{{url('/Imagenes/Index/Categorias/Phone.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Celulares</p>
                            </div></a>
                        </div>
                            <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=videojuegos"><img  src="{{url('/Imagenes/Index/Categorias/Juegos.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Videojuegos</p>
                            </div></a>
                        </div>
                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark " href="categorias.php?categoria=herramientas"><img  src="{{url('/Imagenes/Index/Categorias/Tools.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Herramientas</p>
                            </div></a>
                        </div>

                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=hogar"><img  src="{{url('/Imagenes/Index/Categorias/House.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Hogar</p>
                            </div></a>
                        </div>
                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=autos"><img  src="{{url('/Imagenes/Index/Categorias/Car.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Autos</p>
                            </div></a>
                        </div>
                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=colchonesSommiers"><img  src="{{ url('/Imagenes/Index/Categorias/Bed.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Colchones y Sommiers</p>
                            </div></a>
                        </div>
                        <div class=" card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
                            <a class="text-decoration-none text-dark" href="categorias.php?categoria=televisor"><img  src="{{url('/Imagenes/Index/Categorias/TV.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Televisores</p>
                            </div></a>
                        </div>

                </div>


                {{-- Fin Container --}}
            </div>
        </div>





@stop
