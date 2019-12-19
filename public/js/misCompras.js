window.onload = function()
{

  let table = document.getElementById('table');

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
    table.innerHTML = ''
    for(let compra of compras)
    {
      table.innerHTML +=
      `
      <tr>
        <th>${compra.id}</th>
        <td>${compra.productos}</td>
      </tr>
      `
    }
  }
//
}
