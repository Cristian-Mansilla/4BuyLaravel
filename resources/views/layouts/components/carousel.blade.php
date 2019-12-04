
<div class="container my-4 d-lg-block d-md-none d-sm-none d-none">



    <hr class="my-4">
    <h2 class="col-lg-12">{{$tituloCarousel}}</h2>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item " data-ride="carousel" data-interval="30000">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner " role="listbox">

            <!--First slide-->
            <div class="carousel-item active ">
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                        <div class="col-md-2 itemCarousel">
                            <div class="card mb-2 zoom itemCarousel">
                                <img class="card-img-top p-3" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">$ {{$productos[$i]->precio}} </h4>
                                    <p class="card-text">{{$productos[$i]->titulo}}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!--Second slide-->
            @if(count($productos) >= 11)
                <div class="carousel-item ">
                    <div class="row">
                        @for($i = 6; $i < 12; $i++)
                            <div class="col-md-2 itemCarousel">
                                <div class="card mb-2 zoom itemCarousel">
                                    <img class="card-img-top p-3" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">$ {{$productos[$i]->precio}} </h4>
                                        <p class="card-text">{{$productos[$i]->titulo}}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif


            <!--Third slide-->
            @if(count($productos) >= 18)
                <div class="carousel-item ">
                    <div class="row" >
                        @for($i = 13; $i < 19; $i++)
                            <div class="col-md-2 itemCarousel" >
                                <div class="card mb-2 zoom itemCarousel">
                                    <img class="card-img-top p-3" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                    <div class="card-body  text-center">
                                        <h4 class="card-title">$ {{$productos[$i]->precio}} </h4>
                                        <p class="card-text">{{$productos[$i]->titulo}}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif
        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

        <!--Controls-->
        <a class="carousel-control-prev col-1 bg-dark botonSlide rounded-circle ml-5" href="#multi-item-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next col-1 bg-dark botonSlide rounded-circle mr-5" href="#multi-item-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>



    <div class="container my-4 d-block d-md-block d-lg-none">

            <hr class="my-4">
            <h2 class="col-lg-12">lo mas vendido</h2>
            <!--Carousel Wrapper-->
            <div id="multi-item-example-medium" class="carousel slide carousel-multi-item " data-ride="carousel" data-interval="3000">

                <!--Slides-->
                <div class="carousel-inner " role="listbox">
                        <div class="carousel-item active ">
                                <div class="row m-0">
                                        <div class="col-6 itemCarousel">
                                            <div class="card mb-2 zoom itemCarousel">
                                                <img class="card-img-top p-3  px-md-5 pt-md-5 " src="{{$productos[0]->ruta_imagen}}"alt="Card image cap">
                                                <div class="card-body text-center">
                                                    <p class="card-title infoProdDetalle">$ {{$productos[0]->precio}} </p>
                                                    <p class="card-text">{{$productos[0]->titulo}}</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-6 itemCarousel">
                                            <div class="card mb-2 zoom itemCarousel">
                                                <img class="card-img-top p-3 px-md-5 pt-md-5 " src="{{$productos[1]->ruta_imagen}}"alt="Card image cap">
                                                <div class="card-body text-center">
                                                    <p class="card-title infoProdDetalle">$ {{$productos[1]->precio}} </p>
                                                    <p class="card-text">{{$productos[1]->titulo}}</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                    @for($i = 2; $i < 19; $i = $i +2)
                        <div class="carousel-item ">
                            <div class="row m-0">
                                    <div class="col-6 itemCarousel">
                                        <div class="card mb-2 zoom itemCarousel">
                                            <img class="card-img-top p-3  px-md-5 pt-md-5 " src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                            <div class="card-body text-center">
                                                <p class="card-title infoProdDetalle">$ {{$productos[$i]->precio}} </p>
                                                <p class="card-text">{{$productos[$i]->titulo}}</p>
                                            </div>
                                        </div>
                                    </div>


                                        <div class="col-6 itemCarousel">
                                            <div class="card mb-2 zoom itemCarousel">
                                                <img class="card-img-top p-3  px-md-5 pt-md-5  " src="{{$productos[$i+1]->ruta_imagen}}"alt="Card image cap">
                                                <div class="card-body text-center">
                                                    <p class="card-title infoProdDetalle">$ {{$productos[$i+1]->precio}} </p>
                                                    <p class="card-text">{{$productos[$i+1]->titulo}}</p>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        @if($i= count($productos))
                            @break
                        @endif
                    @endfor




                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->

                <!--Controls-->
                <a class="carousel-control-prev col-1 bg-dark botonSlide rounded-circle ml-2 ml-sm-4" href="#multi-item-example-medium" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next col-1 bg-dark botonSlide rounded-circle mr-2 mr-sm-4" href="#multi-item-example-medium" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
</div>
