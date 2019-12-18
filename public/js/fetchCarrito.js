

    fetchCarrito();






    function fetchCarrito(){

        fetch('/Carrito/get')
            .then(function(response){
                console.log('Datos:'+response);
                return response.json();
            })
            .then(function(data){

                var div = document.getElementById('carrito');
                div.innerHTML = '';
                let precioTotal = 0;
                let descuento = 0;


                if(data && data.length){

                    var cant = $("#cantCarrito").data('value');
                    let cantidad = 0;
                    console.log(cant);
                    data.map(function (prod) {

                        console.log('cantidades: '+cant);
                        cant.map(function (cant){
                            if(cant.prod == prod.id){
                                cantidad = cant.cantidad;
                            }
                        });
                        var precio = prod.precio * cantidad;
                        precioTotal = precioTotal + precio;
                        if(prod.oferta != 0){
                            descuento = descuento + prod.oferta;
                        }
                        const templateLiteral = `
                        <div class=' row justify-content-around bg-white p-2 mt-1 prodCarrito'>
                        <div class='col-2 pt-2'>
                            <img src='${prod.ruta_imagen}' alt='Imagen Producto' height='100'>
                        </div>
                        <div class='col-lg-10 col-9 row justify-content-between'>
                            <div class='col-6 mt-4 px-0 infoMercado'>
                                <h5>Celular motorola moto g4 32 Gb + 3GB Ram${prod.titulo}</h5>
                            </div>
                            <div class='col-6 row justify-content-between'>
                                <div class='col-6 mt-4'>
                                    <p>Precio: $ ${prod.precio}</p>
                                    <p>Cantidad: ${cantidad} </p>
                                </div>

                                <div class='col-5 mt-5'>
                                    <button class='bg-primary text-white rounded p-2 eliminar noBorder' onclick='deleteProdCar(${prod.id})'>Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>`;


                    div.innerHTML = div.innerHTML.concat(templateLiteral);
                    var menu = document.getElementById('menu');
                    const templateLiteral2 = `
                    <div class="row justify-content-around p-2 bg-white menuCarrito pt-4">

                    <div class="col-12 border-bottom mb-1">
                        <h5>Monto = $ ${precioTotal}</h5>
                        <h5>Descuento = $ ${descuento}</h5>

                    </div>
                    <h4 class='pl-1'>Total a pagar = $ ${precioTotal-descuento}</h4>
                    <div class='col-12 row justify-content-between mt-4'>
                        <button class='bg-primary text-white rounded p-2 noBorder col-5 botonCarrito'onclick='compra()' >Comprar</button>
                        <button class='bg-primary text-white rounded p-2 noBorder col-5 botonCarrito' onclick='deleteCar()'>Vaciar Carrito</button>
                        <input type='hidden' data-value='${precioTotal-descuento}' id='precioTotal'>
                    </div>
                </div>`;
                    menu.innerHTML = templateLiteral2;
                    });
                }else{
                    var div = document.getElementById('carrito');
                    div.innerHTML = '';
                    div.innerHTML = "<h4 class='text-right' >No tienes nada en tu carrito</h4>";
                    var menu = document.getElementById('menu');
                    menu.style.display = 'none';
                }


            })
            .catch(function(error){
                console.log(error);
            })
    }

function deleteProdCar(id){
    fetch('/Carrito/delete/'+id)
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            console.log(data);
            fetchCarrito();
        })
        .catch(function(error){
            console.log(error);
        })
}

function deleteCar(){
    console.log('delete');
    swal({
        text: "Quiere vaciar su carrito de compras?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((preg) => {
            if (preg) {
                fetch('/Carrito/deleteAll')
                    .then(function(response){
                        return response.json;
                    })
                    .then(function(data){
                        console.log(data);
                        fetchCarrito();
                    })
                    .catch(function(error){
                        console.log(error);
                    })
            }
            });
}

function compra(){
    var precio = $("#precioTotal").data('value');
    location.replace("/Pago/"+precio);
}
