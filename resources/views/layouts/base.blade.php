<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <title>Document</title>
</head>
<body>
        <header class="container-fluid h-200 backg-header d-lg-block d-md-none d-sm-none d-none" >
                <!--Header 1  -->
            <div class="container">
                <div class="row d-flex justify-content-between p-2 col-md-12 col-lg-12">
                    <a href="index.php" class="col-md-2 col-lg-2"><img src="" class="rounded-circle w-md-10 h-md-10 w-lg-25 h-lg-100" alt="LOGO"></a>
                    <form class="form-inline row my-2 my-lg-0 col-md-6 col-lg-6" action ="categorias.php" method="get">
                    <input class="form-control mr-sm-2 col-md-8 col-lg-9" type="search" placeholder="Search" name="categoria" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 col-md-3 col-lg-2 text-white text-decoration-none borde-blanco" type="submit" >Search</button>
                </form>

                    <div class="col-lg-3 row pt-lg-3 d-lg-block d-sm-none d-xs-none d-md-none">




                            @if (Auth::check())

                                <a href='' class='rounded col-7 m-1 p-2 text-center text-white text-decoration-none'><img height="40" width="40" class="rounded-circle" src='/upload/{{ Auth::user()->img_perfil }}' alt='imgPerfil'></a>
                                <a href="/logout" class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none color-lightBlue'>Desloguear</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @else
                                <a href='{{ route('login') }}' class=' borde-blanco pt-1   rounded col-7 m-1 p-2 text-center text-decoration-none text-white'>Iniciar sesion</a>
                                <a href='{{ route('register') }}' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none color-lightBlue'>Registro</a>

                                @endif




                        </div>

                    </div>

                    <!-- Header 2  -->

                    {{-- require("barraNav.php"); --}}



                    </div>
                </div>
            </header>




            <!-- HEADER MEDIUM Y SMALL -->
            <header class="container-fluid backg-header d-lg-none" >
                <div class="container d-flex justify-content-between pb-3">
                    <div class="dropdown col-3 pt-2">
                        button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="menu"></ion-icon>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">




                                @if (Auth::check())

                                <button class='dropdown-item' type='butto'><a href='perfil.php' class='text-center pt-2 col-12 rounded p-1 '>Perfil</a></button>
                                <button class='dropdown-item' type='butto'><a href='desloguear.php' class='text-center pt-2 col-12 rounded p-1 '>Desloguear</a></button>

                                @else
                                <button class='dropdown-item' type='butto'><a href='login.php' class='text-center pt-2 col-12 rounded p-1 '>Iniciar sesion</a></button>
                                <button class='dropdown-item backg-header' type='button'><a href='registro.php' class='text-center pt-2 col-12 rounded text-white p-1'>Registro</a></button>
                                @endif

                            <button class="dropdown-item" type="button"><a href="canjearCupon.php" class="text-center pt-2 col-12 rounded p-1">Canjear cupon</a></button>
                            <button class="dropdown-item" type="button"><a href="categorias.php?categoria=oferta" class="text-center pt-2 col-12 rounded p-1">Ofertas</a></button>
                            <button class="dropdown-item" type="button"><a href="qSomos.php" class="text-center pt-2 col-12 rounded p-1">¿Quienes somos?</a></button>
                            <button class="dropdown-item" type="button"><a href="ayuda.php" class="text-center pt-2 col-12 rounded p-1">Ayuda</a></button>
                            <button class="dropdown-item" type="button"><a href="categorias.php?categoria=oferta" class="text-center pt-2 col-12 rounded p-1">Categorias</a></button>

                        </div>

                    </div>
                        <div class="col-3 py-2 text-center">
                        <a href="index.php" class=""><img src="" height="35" width="35" class="rounded-circle" alt="LOGO"></a>
                    </div>
                    <div class="row col-5 justify-content-between py-2 text-center">
                        <a href="" class="col-4 bg-dark p-2  text-white rounded"><ion-icon name="notifications"></ion-icon></a>
                        <a href="" class="col-4  bg-dark p-2 text-white rounded"><ion-icon name="cart"></ion-icon></a>
                    </div>

                </div>
                <div class="container">
                    <form class="form-inline row my-2 col-12 ml-1">
                        <input class="form-control col-10 col-md-11" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success col-2 col-md-1 text-center text-white borde-blanco" type="submit"><ion-icon name="search"></ion-icon></button>
                    </form>


                </div>
                <br>




            </header>

            @section('content')
            @show




            <footer class="container-fluid justify-content-between row backg-footer m-0">
                    <div class="col-lg-3 col-md-5">
                        <h3 class="col-12 text-white">Comprar y vender</h3>
                        <ul class="list-unstyled">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="registro.php">Registro</a> </li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Marcas</a> </li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Como comprar y vender</a> </li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Productos populares</a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <h3 class="text-white col-12">Metodos de pago</h3>
                        <ul class="list-unstyled ">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Metodos de pago</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Cupones especiales</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Promociones con tarjetas</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 backg-footer">
                        <h3 class="text-white col-12">Mas sobre nosotros</h3>
                        <ul class="list-unstyled">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Acerca de nosotros</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Desarrolladores</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Politicas y reglas</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 backg-footer">
                        <h3 class="text-white col-12">Ayuda</h3>
                        <ul class="list-unstyled">
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Atencion al cliente</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="faqs.php">Preguntas frecuentes</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="contacto.php">Contacto</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Reportar Problema</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Medios de pago</a></li>
                            <li class="ml-3"><a class="text-white text-decoration-none" href="#">Ayuda</a></li>

                        </ul>
                    </div>

            </footer>

</body>
</html>