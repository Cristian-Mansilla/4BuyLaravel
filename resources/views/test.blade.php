@extends('layouts.app')

@section('content')
<main class="container-fluid row d-flex">
    <nav class="navbar bg-dark col-2">
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="link1()">Link 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="link2()">Link 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
          </li>
        </ul>

      </nav>
      <div class="col-10" id="content">

      </div>

</main>
{{--  --}}
@endsection

@section('scripts')
    <script>
        function caracteristicaProd(id){

            fetch('/Admin/eliminarProd/'+id)
                .then(function(response){
                    return response.json();
                })
                .then(function(data){
                    console.log(data.status);
                    link1();
                })
                .catch(function(error){
                    console.log(error);
                })
            }
        function link1(){
            let div = document.getElementById('content');

            fetch('/Admin/getProds')
                .then(function(response){
                    return response.json();
                })
                .then(function(data){
                    console.log(data);
                    div.innerHTML = '';
                    div.innerHTML = `<table class="table">
                    <thead id="thead">

                    </thead>
                    <tbody id="tbody">


                    </tbody>
                    </table>`;
                    var thead = document.getElementById('thead');
                    thead.innerHTML = `<tr>
                    <th scope="col"># Poducto</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Caracteristicas</th>
                    </tr>`;

                    var tbody = document.getElementById('tbody');
                    var i = 0;
                    data.map(function(prod){
                    i++;
                        templateLiteral = `<tr>
                    <th scope="row">${i}</th>
                    <td>${prod.titulo}</td>
                    <td>$ ${prod.precio}</td>
                    <td>${prod.stock}</td>`;
                    console.log(prod.info);

                    templateLiteral = templateLiteral+`<td><button onclick="caracteristicaProd(${prod.id})">Eliminar</button></td>`;
                    templateLiteral = templateLiteral+`</tr>`;
                    tbody.innerHTML = tbody.innerHTML.concat(templateLiteral);
                    })



                })
                .catch(function(error){
                    console.log(error);
                })

        }


        function link2(){
            let div = document.getElementById('content');
            div.innerHTML = '';
            div.innerHTML = `<table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>`;
        }


    </script>
@endsection
