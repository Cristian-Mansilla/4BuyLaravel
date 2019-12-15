

document.getElementById("enviar").addEventListener("click", function(event){
    event.preventDefault()
    var monto = document.getElementById("monto").value;
    swal({
        text: "Esta seguro de que quiere realizar el pago por $"+monto,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((pagar) => {
        if (pagar) {
          swal("El pago se a realizado con exito", {
            icon: "success",
          });
        } else {
          swal("Se ha cancelado la transaccion");
        }
      });
    });

