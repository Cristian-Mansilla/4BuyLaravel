

@extends('layouts.base')

@section('head')

@stop

@section('title')
Home
@stop
@section('content')
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide col-12 p-0" data-ride="carousel" data-delay="3">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/exhibitors/MLA-vacaciones-a-un-click/55a742b0-0704-11ea-9e73-d195bc8dc8db-home-slider_desktop.jpg" alt="" class="imgCarousel">
                </div>
                <div class="carousel-item">
                    <img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mla-home-desktop-slider-picture-0dd8b481-6e18-4d0f-8207-61072a5379ca.jpg" alt="" class="imgCarousel">
                </div>
                <div class="carousel-item">
                    <img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mla-home-desktop-slider-picture-e82ae8e7-44ee-455a-93ef-93b98e6a1e0f.jpg" alt="" class="imgCarousel">
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

        <div class="container-fluid backg-grey p-1">
            <main class="container">
                <!-- Bannerts Tarjetas -->

                <br><br><br>
                <!-- Mas Vendidos -->
                {{-- @include('compartido.carousel') --}}
                @carousel(['productos'=> $prodMasVendidos])
                @endcarousel
                {{-- fin mas vendidos --}}
                <br><br><br>
                <div class="col-12 height-publicidad">
                    <img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mla-home-desktop-slider-picture-fd696b80-3b30-44f1-a5b9-8dc7b7959bea.jpg" class="height-publicidad" alt="">
                </div>
                <br><br><br>
                <div class="justify-content-center row">
                    <div class="col-12 justify-content-lg-between justify-content-center row">
                        <h2 class="col-lg-12">Segun tu ultima visita</h2>
                        @foreach($prodUltimaVisita as $producto)
                            <div class='zoom col-lg-2 col-md-5 col-sm-6 col-10 p-2'>
                                <a href='/Productos/Detalle/{{$producto->id}} ' class=' text-dark text-decoration-none'>
                                    <div class='card sombra text-center'>
                                        <div class='card-img-top p-3'>
                                            <img src='{{$producto->ruta_imagen}} ' height='120' alt='...'>
                                        </div>
                                        <div class='card-body border-top'>
                                            <h3 class='card-text'>$ {{$producto->precio}}</h3>
                                            <h5 class='card-title color-grey'>{{$producto->titulo}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <br><br><br>
                <h2 class="col-12">Descubrí</h2>
                <br>
                <div class="col-12 row height-280 d-flex justify-content-lg-between justify-content-center">
                    <div class="col-lg-6 col-md-10 bg-dark rounded row sombra">
                        <div class="col-6 text-center pt-5">
                            <p class="col-12 text-white titulo-descubri">LO MEJOR EN INFORMATICA</p>
                            <a href="/Productos/Categoria/3" class="btn btn-primary btn-sm d-block col-12 text-white">Ver más</a>
                        </div>
                        <div class="col-6 pt-4 mb-3 mb-lg-0">
                            <img src="/Imagenes/Index/informatica.jpeg" class="rounded img-descubri" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 bg-white rounded row sombra mt-sm-2 mt-2 mt-lg-0">
                        <div class="col-6 text-center pt-5">
                            <p class="col-12 titulo-descubri text-dark">OFERTAS ESCLUSIVAS</p>
                                <a href="/Productos/Ofertas" class="btn btn-primary btn-sm d-block col-12 text-white">Ver más</a>
                        </div>
                        <div class="col-6 pt-4 ">
                            <img src="/Imagenes/Index/ofertaEsclusiva.jpeg" class="rounded img-descubri" alt="">
                        </div>
                    </div>
                </div>

                <br><br><br><br><br>
                <!-- CATEGORIAS MAS BUSCADAS -->
                <div class="row justify-content-center d-lg-flex d-none ">
                        <h2 class="text-center col-12">CATEGORIAS MAS BUSCADAS</h2>
                        <br><br>

                        <div class=" card p-4 col-2 backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/15"><img  src=" {{ url('/Imagenes/Index/Categorias/Laptop.png') }} " class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Notebooks</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias" >
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/12"><img  src="{{url('/Imagenes/Index/Categorias/Phone.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Celulares</p>
                            </div></a>
                        </div>
                            <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/22"><img  src="{{url('/Imagenes/Index/Categorias/Juegos.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Videojuegos</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2 backg-categorias">
                            <a class="text-decoration-none text-dark " href="/Productos/Categoria/30"><img  src="{{url('/Imagenes/Index/Categorias/Tools.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Herramientas</p>
                            </div></a>
                        </div>

                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/4"><img  src="{{url('/Imagenes/Index/Categorias/House.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Hogar</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/=autos"><img  src="{{url('/Imagenes/Index/Categorias/Car.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Autos</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/19"><img  src="{{ url('/Imagenes/Index/Categorias/Bed.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Colchones y Sommiers</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/8"><img  src="{{url('/Imagenes/Index/Categorias/TV.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Televisores</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/9"><img  src="{{url('/Imagenes/Index/Categorias/Audio.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Audio</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/6"><img  src="{{url('/Imagenes/Index/Categorias/Deportes.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Deportes</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/18"><img  src="{{url('/Imagenes/Index/Categorias/Cocina.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Cocina</p>
                            </div></a>
                        </div>
                        <div class=" card p-4 col-2  backg-categorias">
                            <a class="text-decoration-none text-dark" href="/Productos/Categoria/31"><img  src="{{url('/Imagenes/Index/Categorias/Pintureria.png')}}" class="card-img-top p-5" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center ">Pinturería</p>
                            </div></a>
                        </div>


                </div>
                <div>
                    <br><br><br><br><br><br><br>
                </div>
            </main>

                {{-- Fin Container --}}
            </div>







@stop


@section('scripts')

@stop
