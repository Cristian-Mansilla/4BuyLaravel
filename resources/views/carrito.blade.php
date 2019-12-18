@extends('layouts.base')

@section('content')

    <div class='row my-5 d-flex justify-content-between mx-3'>
        <div class="col-lg-8 col-12 mb-2" id="carrito">
        </div>
        <div class="col-lg-3 col-12" id="menu">

        </div>
    </div>


@endsection

<input type="hidden" id="cantCarrito" data-value="{{json_encode($cantCarrito)}}">

@section('scripts')
    <script src="js/fetchCarrito.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
