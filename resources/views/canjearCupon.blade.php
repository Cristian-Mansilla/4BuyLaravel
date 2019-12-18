@extends('layouts.base')


@section('title')
    Canjear cupón
@endsection

@section('content')
    <main class="container justify-content-center d-flex mt-5 mb-5">
        <div>
            <br><br><br>
        </div>
        <form action="" class="my-5 row justify-content-between" >

            <input type="email" class="form-control col-8" id="cupon" aria-describedby="emailHelp" placeholder="Cupón">
            <button type="submit" class="btn btn-primary col-3" id='enviar'>Ingresar</button>
        </form>
    </main>
@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/cupon.js')}}"></script>
@endsection
