@extends('layouts.base')

@section('content')
<br><br>
<main class="container justify-content-center">
    <div class="col-12 row my-3 justify-content-center">
        <div class="col-6 ">
            <img src=" {{$producto[0]->ruta_imagen}}" class="sombraS" height="500" width="500" alt="Imagen Producto">
        </div>
        <div class="col-5 text-left row bg-white p-4 sombraS">
            <div class="col-12 mt-2 ">
                <h2> {{$producto[0]->titulo}}</h2>
                <h1>$ {{$producto[0]->precio}} </h1>
                <h4>Stock: {{$producto[0]->stock}} </h4>
            </div>
            <div class="col-12">
                <p><img src="https://img.icons8.com/cute-clipart/32/000000/bank-card-back-side.png"> Paga en hasta 12 cuotas</p>
                <img src="https://img.icons8.com/cute-clipart/32/000000/visa.png">
                <img src="https://img.icons8.com/color/32/000000/mastercard-logo.png">
                <img src="https://img.icons8.com/color/32/000000/amex.png">
                <br><br>

                <p><img src="https://img.icons8.com/nolan/32/000000/delivery.png"> Envio gratis</p>
            </div>
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
