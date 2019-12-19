window.onload = function ()
{

  //Mis datos
  let nombre = document.getElementById('name');
  let apellido = document.getElementById('lastname');
  let username = document.getElementById('username');
  let email = document.getElementById('email');
  let formatoEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

  getInfo();

  function getInfo()
  {
    fetch('/perfil/get')
      .then(function(response)
      {
        return response.json();
      })
      .then(function(data)
      {
        console.log(data);
        nombre.value = data.nombre;
        apellido.value = data.apellido;
        username.value = data.usuario;
        email.value = data.email;
      })
      .catch(function(error)
      {
        console.log(error);
      })
  }

  document.getElementById('guardar').addEventListener('click', function (event)
  {
    //validando campos
    validar(nombre);
    validar(apellido);
    validar(username);
    if (email.value.trim() == '') {
      alert('El campo email es obligatorio')
      event.preventDefault()
    } else if (!formatoEmail.test(email.value)) {
      alert('El campo email no es una dirección de correo electrónico valido')
      event.preventDefault()
    }

    //Informe de cambios al usuario
    fetch('/perfil/actualizar')
      .then(function(response)
      {
        return response.json();
      })
      .then(function(data)
      {
          //console.log(data);
          if (data.status == 'ok') {
            alert('Los cambios se realizaron exitosamente');

            return redirect().route('miPerfil');
          }
      })
      .catch(function(error)
      {
          console.log(error)
      })
  })

  function validar(campo)
  {
    if (campo.value.trim() == '') {
      alert('El campo '+campo.name+' es obligatorio')
      event.preventDefault()
    } else if (campo.value.length < 3) {
      alert('El campo '+campo.name+' es muy corto')
      event.preventDefault()
    }
  }
  //Fin mis datos

  //Mis compras
  let tbody = document.querySelector('#content');

  obtenerCompras();

  function obtenerCompras()
  {
    fetch('/perfil/compras')
      .then(function(response)
      {
        return response.json()
      })
      .then(function(data)
      {
          console.log(data)
          tablaCompras(data)
      })
      .catch(function(error)
      {
          console.log(error)
      })
  }

  function tablaCompras(compras)
  {
    tbody.innerHTML = ''
    for(let compra of compras)
    {
      tbody.innerHTML +=
      `
      <tr>
        <th scope="row">${compra.id}</th>
        <td>${compra.productos}</td>
      </tr>
      `
    }
  }
//Fin mis compras
}
