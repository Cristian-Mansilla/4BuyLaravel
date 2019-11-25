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

        <div class="container-fluid">
            <div class="container">
                <!-- Bannerts Tarjetas -->
                <div class="col-12 border-bottom justify-content-between d-flex my-2 ">
                    <img src="{{asset('/Imagenes/Banners/banner_tarjeta1.png')}}" height="100" width="500" alt="Banert Tarjetas 1" class="col-lg-6 col-md-12">
                    <img src="{{asset('/Imagenes/Banners/banner_tarjeta2.png')}}" height="100" width="500" alt="Baner Tarjetas 2" class="col-lg-6 d-lg-block d-sm-none d-md-none d-none ">
                </div>
                <br><br><br><br><br>
                <!-- Mas Vendidos -->
                <div class="justify-content-center">
                        <h2 class="col-12 border-bottom border-secondary">Lo mas vendido</h2>
                </div>


            </div>
        </div>





@stop
