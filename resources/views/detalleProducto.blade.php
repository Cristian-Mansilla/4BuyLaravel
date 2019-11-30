@extends('layouts.base')

@section('content')
<br><br>
<main class="container justify-content-center">
    <div class="col-12 row my-3 justify-content-center justify-content-md-between">
        <div class="col-lg-6 col-12 col-md-5 my-2 ml-4">
            <img src=" {{$producto[0]->ruta_imagen}}" class="sombraS imgProdDetalle" alt="Imagen Producto">
        </div>
        <div class="col-lg-5 col-10 col-md-5 col-sm-12 ml-lg-0 ml-md-0 ml-sm-5 ml-2 text-left row bg-white p-4 sombraS">
            <div class="col-12 mt-2 ">
                <p class="tituloProdDetalle"> {{$producto[0]->titulo}}</p>
                <p class="infoProdDetalle">$ {{$producto[0]->precio}} </p>
                <p class="infoProdDetalle">Stock: {{$producto[0]->stock}} </p>
            </div>
            <div class="col-12 infoProdDetalle">
                <p><img src="https://img.icons8.com/cute-clipart/32/000000/bank-card-back-side.png"> Paga en hasta 12 cuotas</p>
                <img src="https://img.icons8.com/cute-clipart/32/000000/visa.png">
                <img src="https://img.icons8.com/color/32/000000/mastercard-logo.png">
                <img src="https://img.icons8.com/color/32/000000/amex.png">
                <br><br>

                <p><img src="https://img.icons8.com/nolan/32/000000/delivery.png"> Envio gratis</p>
            </div>
            <button class="btn searchButton text-white col-12 text-center">Añadir al carrito</button>
        </div>
    </div>
    <br><br>
    <div class="col-12 text-center bg-white ">
        <h4>Descripción</h4>
        <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ratione animi dolorum in voluptates fugit hic neque nam repellat! Dolore natus earum officia ipsam cum mollitia consequuntur nam quisquam doloremque.</p>
        <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ratione animi dolorum in voluptates fugit hic neque nam repellat! Dolore natus earum officia ipsam cum mollitia consequuntur nam quisquam doloremque.</p>
        <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ratione animi dolorum in voluptates fugit hic neque nam repellat! Dolore natus earum officia ipsam cum mollitia consequuntur nam quisquam doloremque.</p>
        <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ratione animi dolorum in voluptates fugit hic neque nam repellat! Dolore natus earum officia ipsam cum mollitia consequuntur nam quisquam doloremque.</p>
        <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ratione animi dolorum in voluptates fugit hic neque nam repellat! Dolore natus earum officia ipsam cum mollitia consequuntur nam quisquam doloremque.</p>
        <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ratione animi dolorum in voluptates fugit hic neque nam repellat! Dolore natus earum officia ipsam cum mollitia consequuntur nam quisquam doloremque.</p>




    </div>

</main>

@stop
