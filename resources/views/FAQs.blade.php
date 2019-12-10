@extends('layouts.base')

@section('title')
  FAQs
@endsection

@section('content')
  <!--inicia sección volver atrás-->
  <section class="goBack pt-3">
    <div class="container">
      <div class="text-center">
        <h1 class="font-weight-bold align-middle mt-4">Preguntas
          <span class="font-weight-normal">Frecuentes</span>
        </h1>
      </div>
    </div>
    <div class="bg-blue pt-3 pb-1 mt-5">
      <div class="container">
        <ul>
          <li class="d-inline"><a class="text-decoration-none anchorPersonalizado" href="{{route('home')}}">Home</a></li>
          <span>/ /</span>
          <li class="d-inline">FAQS</li>
        </ul>
      </div>
    </div>
  </section>
  <!--finaliza sección volver atrás-->
  <!--inicia sección preguntas frecuentes-->
  <section class="bg-white pb-4 pt-4">
    <div class="container">
      <ul class="list-none">
        <li>
          <div class="text-center">
            <h2 class="first-letter">FAQS</h2>
          </div>
        </li>
        <div class="flex-container">
          <div class="w-25">
            <hr>
          </div>
          <div>
            <ion-icon name="ios-bowtie"></ion-icon>
          </div>
          <div class="w-25">
            <hr>
          </div>
        </div>
        <ol class="hideAndSeek">
          <li>
            <a href="#a">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ?</a>
            <p id="a">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </li>
          <li>
            <a href="#b">The standard Lorem Ipsum passage Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices ?</a>
            <p id="b">Tincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </li>
          <li>
            <a href="#c">Consectetuer adipiscing elit Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>
            <p id="c">Dincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </li>
          <li>
            <a href="#d">Sed diam nonummy nibh euismod Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>
            <p id="d">At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </li>
          <li>
            <a href="#e">Euismod tincidunt laoreet Etiam faucibus viverra libero vel efficitur ?</a>
            <p id="e">At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </li>
          <li>
            <a href="#f">Voluptas sit aspernatur aut Ut semper nisl ut laoreet ultrices ?</a>
            <p id="f">At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </li>
        </ol>
      </ul>
    </div>
  </section>
  <!--finaliza sección preguntas frecuentes-->
@endsection
