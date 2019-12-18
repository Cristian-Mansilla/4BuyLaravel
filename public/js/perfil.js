window.onload = function ()
{

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
        //console.log(data);
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
//
}
