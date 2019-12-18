window.onload = function ()
{

  let nombre = document.getElementById('name');
  let apellido = document.getElementById('lastname');
  let username = document.getElementById('username');
  let email = document.getElementById('email');

  getInfo();

  function getInfo ()
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


}
