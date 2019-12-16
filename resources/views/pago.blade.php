


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/pago.css')}}">
</head>
<body>



 <form class="checkout" action>
    <div class="checkout-header">
      <h1 class="checkout-title">
        Checkout

    </div>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Propietario" name="propietario" id="propietario">
      <input type="text" class="checkout-input checkout-exp" placeholder="MM" name="mes_ven" id="mes_ven">
      <input type="text" class="checkout-input checkout-exp" placeholder="YY" name="año_ven" id="año_ven">
    </p>
    <p>
      <input type="text" class="checkout-input checkout-card" placeholder="4111 1111 1111 1111" name="numero_tarjeta" id="numero_tarjeta">
      <input type="text" class="checkout-input checkout-cvc" placeholder="CVC" name="cvc" id="cvc">
    </p>
    <p>
      <input type="submit" value="Purchase" id='enviar' class="checkout-btn">
    </p>
  </form>
    <input type="hidden" value='{{$precio}}' id="monto">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src=" {{asset('js/pago.js')}} "></script>

  {{-- {{dd($prods)}} --}}

</body>
</html>
