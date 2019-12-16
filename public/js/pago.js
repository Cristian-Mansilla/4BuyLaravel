

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
                    var numeroTarjeta = document.getElementById("numero_tarjeta").value;
                    var propietario = document.getElementById("propietario").value;
                    var cvc = document.getElementById("cvc").value;
                    var mesVen = document.getElementById("mes_ven").value;
                    var añoVen = document.getElementById("año_ven").value;

                    var datosTarjeta = [];
                    datosTarjeta.push(numeroTarjeta,propietario,cvc,mesVen,añoVen);

                    datosTarjeta = datosTarjeta.toString();
                fetch('/Pago/procesar/'+datosTarjeta)
                    .then(function(response){
                        return response.json();
                    })
                    .then(function(data){
                        console.log(data.status);
                        if(data.status == 'ok'){
                            swal("El pago se a realizado con exito", {
                                icon: "success",
                            });
                            function redirect(){
                                window.location = '/';
                            }
                            setTimeout(redirect, 1500);
                        }else{
                            swal("No se pudo realizar el pago", {
                                icon: "error",
                            });
                        }
                    })
                    .catch(function(error){
                        console.log(error);
                    })

            } else {
                swal("Se ha cancelado la transaccion");
            }
            });
    });

