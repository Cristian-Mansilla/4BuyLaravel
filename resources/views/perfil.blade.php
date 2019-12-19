@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{asset("css/perfil.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <style>
      body{
          background-color: rgb(235, 235, 235);
      }
  </style>
@endsection

@section('script')
  <script src="{{asset("js/perfil.js")}}"></script>
@endsection

@section('content')
  <!--inicia seccion perfil-->
  <div class="row">
    <div class="col-12 col-md-3">
      <section class="navbar-perfil">
        <nav class="navbar sticky-top navbar-light bg-celeste d-flex flex-column align-items-center icon-size rounded-right shadow-sm">
          <img class="logo-perfil" src='/upload/{{auth()->user()->img_perfil}} ' alt="">
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
            <a class="navbar-brand" href="#"><i class="fa fa-bars"></i>Mi cuenta</a>
          </button>
          <span>
            ¡Hola {{(auth()->user())?auth()->user()->usuario:'usuario'}} !
          </span>
          <div class="collapse show" id="navbarNavDropdown">
            <ul class="nav navbar-nav" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="resumen-tab" href="#resumen" data-toggle="tab" role="tab" aria-controls="resumen" aria-selected="true">
                  <i class="fa fa-list-alt"></i>Resumen
                </a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" id="facturacion-tab" href="#facturacion" data-toggle="tab" role="tab" aria-controls="facturacion" aria-selected="false">
                  <ion-icon name="card"></ion-icon>Facturación
                </a>
              </li>
              -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-shopping-bag"></i>Compras
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @foreach ($compras as $item)
                    <a class="dropdown-item" id="{{$item["id"]}}" href="{{$item["href"]}}" data-toggle="tab" role="tab" aria-controls="{{$item["aria-control"]}}" aria-selected="false">
                      {{$item["name"]}}
                    </a>
                  @endforeach
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cog"></i>Configuración
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @foreach ($config as $item)
                    <a class="dropdown-item" id="{{$item["id"]}}" href="{{$item["href"]}}" data-toggle="tab" role="tab" aria-controls="{{$item["aria-control"]}}" aria-selected="false">
                      {{$item["name"]}}
                    </a>
                  @endforeach
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </section>
    </div>
    <!--contenido para los nav-items-->
    <div class="col-12 col-md-9">
      <section class="tab-content">
        @foreach ($tabContent as $content)
          @if ($content["id"] == "resumen")
            <div class="tab-pane fade show active" id="{{$content["id"]}}" role="tabpanel" aria-labelledby="{{$content["aria-labelledby"]}}">
              @component($content["pagina"])@endcomponent
            </div>
          @else
            <div class="tab-pane fade show" id="{{$content["id"]}}" role="tabpanel" aria-labelledby="{{$content["aria-labelledby"]}}">
              @component($content["pagina"])@endcomponent
            </div>
          @endif
        @endforeach
      </section>
    </div>
  </div>
  <!--finaliza seccion perfil-->
@endsection
