@extends('layouts.base')

@section('content')

    <div class='row my-5 d-flex justify-content-between mx-3'>
        <div class="col-8" id="carrito">
        </div>
        <div class="col-3" id="menu">

        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/fetchCarrito.js" ></script>
@endsection
