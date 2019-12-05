
<div class="container my-4 d-lg-block d-md-none d-sm-none d-none">



    <hr class="my-4">
    <h2 class="col-lg-12">{{$tituloCarousel}}</h2>
    <!--Carousel Wrapper-->
    <div id="{{$nombre}}" class="carousel slide carousel-multi-item " data-ride="carousel" data-interval="30000">



        <!--Slides-->
        <div class="carousel-inner " role="listbox">

            <!--First slide-->
            <div class="carousel-item active ">
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                        <div class="col-md-2 itemCarousel">
                            <a class="text-dark" href="/Productos/Detalle/{{$productos[$i]->id}}">
                              <div class="card mb-2 zoom itemCarousel">
                                  <img class="card-img-top p-1" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                  <div class="card-body text-center p-2">
                                      <h4 class="card-title">$ {{$productos[$i]->precio}} </h4>
                                      <p class="card-text">{{$productos[$i]->titulo}}</p>
                                  </div>
                              </div>
                            </a>
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
                              <a class="text-dark" href="/Productos/Detalle/{{$productos[$i]->id}}">
                                <div class="card mb-2 zoom itemCarousel">
                                    <img class="card-img-top p-1" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                    <div class="card-body text-center p-2">
                                        <h4 class="card-title">$ {{$productos[$i]->precio}} </h4>
                                        <p class="card-text">{{$productos[$i]->titulo}}</p>
                                    </div>
                                </div>
                              </a>
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
                                <a class="text-dark" href="/Productos/Detalle/{{$productos[$i]->id}}">
                                  <div class="card mb-2 zoom itemCarousel">
                                      <img class="card-img-top p-1" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                      <div class="card-body  text-center p-2">
                                          <h4 class="card-title">$ {{$productos[$i]->precio}} </h4>
                                          <p class="card-text">{{$productos[$i]->titulo}}</p>
                                      </div>
                                  </div>
                                </a>
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
        <a class="carousel-control-prev col-1 bg-dark {{$clase}} rounded-circle ml-5" href="{{$id}}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next col-1 bg-dark {{$clase}} rounded-circle mr-5" href="{{$id}}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>



    <div class="container my-4 d-block d-md-block d-lg-none">

            <hr class="my-4">
            <h2 class="col-lg-12">lo mas vendido</h2>
            <!--Carousel Wrapper-->
            <div id="{{$nombre2}}" class="carousel slide carousel-multi-item " data-ride="carousel" data-interval="300000">

                <!--Slides-->
                <div class="carousel-inner " role="listbox">
                        <div class="carousel-item active ">
                                <div class="row m-0">
                                        <a class="text-dark col-6 " href="/Productos/Detalle/{{$productos[0]->id}} ">
                                          <div class="itemCarousel p-0">
                                              <div class="card mb-2 zoom itemCarousel">
                                                  <img class="card-img-top p-1 imgCarouselProd" src="{{$productos[0]->ruta_imagen}}"alt="Card image cap">
                                                  <div class="card-body text-center p-2">
                                                      <p class="card-title infoProdDetalle">$ {{$productos[0]->precio}} </p>
                                                      <p class="card-text">{{$productos[0]->titulo}} {{count($productos)}} </p>
                                                  </div>
                                              </div>
                                          </div>
                                        </a>


                                        <a class="text-dark col-6" href="/Productos/Detalle/{{$productos[1]->id}} ">
                                          <div class=" itemCarousel p-0">
                                              <div class="card mb-2 zoom itemCarousel">
                                                  <img class="card-img-top p-1 imgCarouselProd" src="{{$productos[1]->ruta_imagen}}"alt="Card image cap">
                                                  <div class="card-body text-center p-2">
                                                      <p class="card-title infoProdDetalle">$ {{$productos[1]->precio}} </p>
                                                      <p class="card-text">{{$productos[1]->titulo}}</p>
                                                  </div>
                                              </div>
                                          </div>
                                        </a>
                                </div>
                            </div>

                    @for($i = 2; $i < 19; $i = $i +2)
                      @if ($i == count($productos) || $i+1 == count($productos))
                        @break
                      @endif
                        <div class="carousel-item ">
                            <div class="row m-0">
                                    <a class="text-dark col-6" href="/Productos/Detalle/{{$productos[$i]->id}} ">
                                      <div class=" itemCarousel p-0">
                                          <div class="card mb-2 zoom itemCarousel">
                                              <img class="card-img-top p-1 imgCarouselProd" src="{{$productos[$i]->ruta_imagen}}"alt="Card image cap">
                                              <div class="card-body text-center p-2">
                                                  <p class="card-title infoProdDetalle">$ {{$productos[$i]->precio}} </p>
                                                  <p class="card-text">{{$productos[$i]->titulo}}</p>
                                              </div>
                                          </div>
                                      </div>
                                    </a>

                                    <a class="text-dark col-6" href="/Productos/Detalle/{{$productos[$i+1]->id}} ">
                                      <div class=" itemCarousel p-0">
                                          <div class="card mb-2 zoom itemCarousel">
                                              <img class="card-img-top p-1 imgCarouselProd" src="{{$productos[$i+1]->ruta_imagen}}"alt="Card image cap">
                                              <div class="card-body text-center p-2">
                                                  <p class="card-title infoProdDetalle">$ {{$productos[$i+1]->precio}} </p>
                                                  <p class="card-text">{{$productos[$i+1]->titulo}}</p>
                                              </div>
                                          </div>
                                      </div>
                                    </a>

                                </div>
                            </div>

                    @endfor




                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->

                <!--Controls-->
                <a class="carousel-control-prev col-1 bg-dark {{$clase}} rounded-circle ml-2 ml-sm-4" href="{{$id2}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next col-1 bg-dark {{$clase}} rounded-circle mr-2 mr-sm-4" href="{{$id2}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
</div>
