<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alatsi|Ubuntu:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/navBar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <title>Document</title>
</head>
<body class="backg-grey fuente">

        <header class="container-fluid h-200 backg-header d-lg-block d-md-none d-sm-none d-none" >
                <!--Header 1  -->
            <div class="container">
                <div class="row d-flex justify-content-between p-2 col-md-12 col-lg-12">
                    <a href="/" class="col-md-2 col-lg-2 text-white text-decoration-none " id="logo">4Buy!</a>
                    <form class="form-inline row my-2 my-lg-0 col-md-6 col-lg-6" action ="/Productos/Busqueda" method="get">
                    <input class="form-control mr-sm-2 col-md-8 col-lg-9" type="search" placeholder="Search" name="categoria" aria-label="Search">
                    <button class="btn  my-2 my-sm-0 col-md-3 col-lg-2 text-white text-decoration-none borde-blanco searchButton" type="submit" >Search</button>
                </form>

                    <div class="col-lg-3 row pt-lg-2 d-lg-block d-sm-none d-xs-none d-md-none">




                            @if (Auth::check())

                                <a href='' class='rounded col-7 m-1 p-2 text-center text-white text-decoration-none'><img height="40" width="40" class="rounded-circle" src='/upload/{{ Auth::user()->img_perfil }}' alt='imgPerfil'></a>
                                <a href="/logout" class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none color-lightBlue'>Desloguear</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @else
                                <a href='{{ route('login') }}' class=' borde-blanco rounded col-7 m-1 p-2 text-center text-decoration-none text-white'>Iniciar sesion</a>
                                <a href='{{ route('register') }}' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none text-dark'>Registro</a>

                                @endif




                        </div>

                    </div>

                    <!-- Header 2  -->
                    <div class="main ml-5">
                        <ul class="mNav">
                            <li class="hassubs text-white">Categorias
                                <ul class="dDown" style="z-index:900;">

                                    @foreach ($categorias as $categoria)
                                        <li class='subs hassubs'>{{$categoria->nombre_categoria}}
                                            <ul class='dDown'>
                                                @foreach ($categoria->subcategorias as $subcategoria)
                                                    <li class='subs'><a href='/Productos/Categoria/{{$subcategoria->id}}'>{{$subcategoria->nombre_categoria}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="">Canjear cupon</a></li>
                            <li><a href="/Productos/Ofertas">Ofertas</a></li>
                            <li><a href="">¿Quienes somos?</a></li>
                            <li><a href="a">Ayuda</a></li>

                            <li><a href=""><ion-icon name="notifications"></ion-icon></a></li>
                            <li><a href=""><ion-icon name="cart"></ion-icon></a></li>
                        </ul>
                        <br style="clear: both;">
                    </div>

                    {{-- require("barraNav.php"); --}}


                    </div>
                </div>
            </header>




            <!-- HEADER MEDIUM Y SMALL -->
            <header class="container-fluid backg-header d-lg-none" >
                <div class="container d-flex justify-content-between pb-3">
                    <div class="dropdown col-3 pt-2">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="menu"></ion-icon>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">




                                @if (Auth::check())

                                <button class='dropdown-item' type='butto'><a href='' class='text-center pt-2 col-12 rounded p-1 '>Perfil</a></button>
                                <button class='dropdown-item' type='butto'><a href='{{route('logout')}} ' class='text-center pt-2 col-12 rounded p-1 '>Desloguear</a></button>

                                @else
                                <button class='dropdown-item' type='butto'><a href='{{ route('login') }}' class='text-center pt-2 col-12 rounded p-1 '>Iniciar sesion</a></button>
                                <button class='dropdown-item backg-header' type='button'><a href='{{ route('register') }}' class='text-center pt-2 col-12 rounded text-white p-1'>Registro</a></button>
                                @endif

                            <button class="dropdown-item" type="button"><a href="" class="text-center pt-2 col-12 rounded p-1">Canjear cupon</a></button>
                            <button class="dropdown-item" type="button"><a href="/Productos/Ofertas" class="text-center pt-2 col-12 rounded p-1">Ofertas</a></button>
                            <button class="dropdown-item" type="button"><a href="" class="text-center pt-2 col-12 rounded p-1">¿Quienes somos?</a></button>
                            <button class="dropdown-item" type="button"><a href="" class="text-center pt-2 col-12 rounded p-1">Ayuda</a></button>
                            <button class="dropdown-item" type="button"><a href="/Categorias/Menu" class="text-center pt-2 col-12 rounded p-1">Categorias</a></button>

                        </div>

                    </div>
                        <div class="col-4   py-2 text-center">
                        <a href="/" class="text-white" id="logo">4Buy!</a>
                        </div>

                    <div class="row col-5 justify-content-between justify-content-md-around py-2 text-center">
                        <a href="" class="col-5 col-md-3 col-sm-4 borde-blanco p-2  text-white rounded"><ion-icon name="notifications"></ion-icon></a>
                        <a href="" class="col-5 col-md-3 col-sm-4 borde-blanco p-2 text-white rounded"><ion-icon name="cart"></ion-icon></a>
                    </div>

                </div>
                <div class="container">
                    <form class="form-inline row my-2 col-12 ml-1" action="/Productos/Busqueda" method="get">
                        <input class="form-control col-10 col-md-11" name="categoria" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success col-2 col-md-1 text-center text-white borde-blanco" type="submit"><ion-icon name="search"></ion-icon></button>
                    </form>


                </div>
                <br>




            </header>

            @section('content')
            @show



            {{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> --}}
            <footer class="container-fluid justify-content-lg-between justify-content-center row backg-footer  m-0">
                    <div class="col-lg-3 col-md-5 col-10 text-center text-lg-left text-md-left">
                        <h3 class="col-12 text-white">Comprar y vender</h3>
                        <ul class="list-unstyled">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="{{ route('register') }}">Registro</a> </li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Marcas</a> </li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Como comprar y vender</a> </li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Productos populares</a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-10 text-center text-lg-left text-md-left">
                        <h3 class="text-white col-12">Metodos de pago</h3>
                        <ul class="list-unstyled ">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Metodos de pago</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Cupones especiales</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Promociones con tarjetas</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-10 text-center text-lg-left text-md-left ">
                        <h3 class="text-white col-12">Mas sobre nosotros</h3>
                        <ul class="list-unstyled">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Acerca de nosotros</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Desarrolladores</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Politicas y reglas</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-10 text-center text-lg-left text-md-left">
                        <h3 class="text-white col-12">Ayuda</h3>
                        <ul class="list-unstyled">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Atencion al cliente</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Preguntas frecuentes</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Contacto</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Reportar Problema</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Medios de pago</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Ayuda</a></li>

                        </ul>
                    </div>

            </footer>
            <script src=" {{ url('/js/main.js')}} "></script>
            <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
