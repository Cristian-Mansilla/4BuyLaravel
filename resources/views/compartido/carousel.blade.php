<div class="container my-4">

    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item " data-ride="carousel">



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
                <div class="col-md-2">
                    <div class="card mb-2 zoom">
                        <img class="card-img-top p-3" src="{{$prodMasVendidos[0]->ruta_imagen}} "
                        alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title">$ {{$prodMasVendidos[0]->precio}} </h4>
                        <p class="card-text">Some quick example text </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-2 clearfix d-none d-md-block zoom">
                    <div class="card mb-2">
                        <img class="card-img-top p-3" src="{{$prodMasVendidos[1]->ruta_imagen}} "
                        alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title">$ {{$prodMasVendidos[1]->precio}} </h4>
                        <p class="card-text">Some quick example text </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-2 clearfix d-none d-md-block zoom">
                    <div class="card mb-2">
                        <img class="card-img-top p-3" src="{{$prodMasVendidos[2]->ruta_imagen}} "
                        alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title">$ {{$prodMasVendidos[2]->precio}} </h4>
                        <p class="card-text">Some quick example text </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-2 clearfix d-none d-md-block zoom">
                    <div class="card mb-2">
                        <img class="card-img-top p-3" src="{{$prodMasVendidos[3]->ruta_imagen}} "
                        alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title">$ {{$prodMasVendidos[3]->precio}} </h4>
                        <p class="card-text">Some quick example text </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-2 clearfix d-none d-md-block zoom">
                    <div class="card mb-2">
                        <img class="card-img-top p-3" src="{{$prodMasVendidos[4]->ruta_imagen}} "
                        alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title">$ {{$prodMasVendidos[4]->precio}} </h4>
                        <p class="card-text">Some quick example text </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[5]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">$ {{$prodMasVendidos[5]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

            </div>

        </div>
        <!--/.Second slide-->
        <div class="carousel-item ">

                <div class="row">
                    <div class="col-md-2">
                        <div class="card mb-2 zoom">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[0]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[0]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[1]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[1]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[2]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[2]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[3]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[3]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[4]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[4]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                            <div class="card mb-2">
                                <img class="card-img-top p-3" src="{{$prodMasVendidos[5]->ruta_imagen}} "
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">$ {{$prodMasVendidos[5]->precio}} </h4>
                                <p class="card-text">Some quick example text </p>

                                </div>
                            </div>
                        </div>

                </div>

            </div>
        {{-- end second slide --}}
        {{-- third slide --}}
        <div class="carousel-item  ">

                <div class="row">
                    <div class="col-md-2">
                        <div class="card mb-2 zoom">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[0]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[0]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[1]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[1]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[2]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[2]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[3]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[3]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                        <div class="card mb-2">
                            <img class="card-img-top p-3" src="{{$prodMasVendidos[4]->ruta_imagen}} "
                            alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title">$ {{$prodMasVendidos[4]->precio}} </h4>
                            <p class="card-text">Some quick example text </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 clearfix d-none d-md-block zoom">
                            <div class="card mb-2">
                                <img class="card-img-top p-3" src="{{$prodMasVendidos[5]->ruta_imagen}} "
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">$ {{$prodMasVendidos[5]->precio}} </h4>
                                <p class="card-text">Some quick example text </p>

                                </div>
                            </div>
                        </div>

                </div>

            </div>
            {{-- third slide end --}}
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
