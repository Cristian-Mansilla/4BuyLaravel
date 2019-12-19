@extends('layouts.app')

@section('content')
<main class="container-fluid row d-flex">
    <nav class="navbar bg-dark col-2" style="height:150px; display:block">
        <!-- Links -->
        <ul class="navbar-nav" >
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="link1()">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="link2()">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="link3()">Roles</a>
          </li>

        </ul>

      </nav>
      <div class="col-10" id="content">

      </div>

</main>
{{--  --}}
@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function caracteristicaProd(id){
            swal({
                text: "Esta seguro de que quiere eliminar este producto?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((borrar)=>{
                    if(borrar){
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
                });
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
                    <th scope="col">Eliminar</th>
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
            <thead id='thead'>
                <th scope="col"># Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Imagen</th>
                <th scope="col">Pais</th>
                <th scope="col">Provincia</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody id='tbody'>

            </tbody>
          </table>`;

            fetch('/Admin/getUsers')
                .then(function(response){
                    return response.json();
                })
                .then(function(data){
                    console.log(data);
                    data.map(function(user){
                        let templateLiteral = `<tr>
                    <td>${user.id}</td>
                    <td>${user.nombre}</td>
                    <td>${user.apellido}</td>
                    <td>${user.usuario}</td>
                    <td>${user.email}</td>
                    <td>${user.imagen}</td>
                    <td>${user.pais}</td>
                    <td>${user.provincia}</td>
                    <td><button onclick="eliminarUser(${user.id})">Eliminar</button></td>
                </tr>`;
                let tbody = document.getElementById('tbody');
                tbody.innerHTML = tbody.innerHTML.concat(templateLiteral);
                    });
                })
                .catch(function(error){
                    console.log(error);
                })
        }

        function eliminarUser(id){
            swal({
                text: "Esta seguro de que quiere eliminar este usuario?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((borrar)=>{
                    if(borrar){
                        fetch('/Admin/eliminarUser/'+id)
                            .then(function(response){
                                return response.json();
                            })
                            .then(function(data){
                                console.log(data.status);
                                link2();
                            })
                            .catch(function(error){

                })
                    }
                })
        }


        function link3(){
            let div = document.getElementById('content');
            div.innerHTML = '';
            div.innerHTML = `<table class="table">
            <thead id='thead'>
                <th scope="col"># Rol</th>
                <th scope="col">Nombre</th>
                <th scope="col">Guard</th>
              </tr>
            </thead>
            <tbody id='tbody'>

            </tbody>
          </table>`;

          fetch('/Admin/getRoles')
            .then(function(response){
                return response.json();
            })
            .then(function(data){
                let tbody = document.getElementById('tbody');
                console.log(data);
                data.map(function(rol){
                    let templateLiteral = `<tr>
                    <td>${rol.nombre}</td>
                    <td>${rol.guard_name}</td>
                    <td><button onclick='eliminarRol(${rol.id})'>Eliminar</button></td>
                </tr>`;
                tbody.innerHTML = tbody.innerHTML.concat(templateLiteral);
                })
            })
            .catch(function(error){
                console.log(error);
            })

        }

        function eliminarRol(id){
            swal({
                text: "Esta seguro de que quiere eliminar este rol?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((borrar)=>{
                    if(borrar){
                        fetch('/Admin/eliminarRoles/'+id)
                            .then(function(response){
                                return response.json();
                            })
                            .then(function(data){
                                console.log(data.status);
                                link3();
                            })
                            .catch(function(error){
                                console.log(error)
                            })
                    }
                })
        }
    </script>
@endsection
