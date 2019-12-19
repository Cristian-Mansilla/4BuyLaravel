window.onload = function()
{

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
          //console.log(compras)
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
//
}
