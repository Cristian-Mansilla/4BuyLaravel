


    <hr class="my-4">
    <h2 class="col-lg-12">{{$tituloCarousel}}</h2>
    <!--Carousel Wrapper-->


<div class="carouselSlick">
    @foreach ($productos as $item)
        <div class="card itemCarousel">
            <a href="/Productos/Detalle/{{$item->id}}" class="text-center text-dark itemCarousel" style="height:270px">
                <img src="{{$item->ruta_imagen}} " class="card-img-top imgCarouselMult p-3" alt="...">
                <div class="card-body p-3">
                    <h5 class="card-title">$ {{$item->precio}} </h5>
                    <p class="card-text ">{{$item->titulo}} </p>
                </div>
            </a>
        </div>
    @endforeach


</div>
