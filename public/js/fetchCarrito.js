
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
                    data.map(function (prod) {
                        precioTotal = precioTotal + prod.precio;
                        if(prod.oferta != 0){
                            descuento = descuento + prod.oferta;
                        }
                        const templateLiteral = `
                        <div class=' row justify-content-around bg-white p-2 mt-1 prodCarrito'>
                        <div class='col-2 pt-2'>
                            <img src='${prod.ruta_imagen}' alt='Imagen Producto' height='100'>
                        </div>
                        <div class='col-10 row justify-content-between'>
                            <div class='col-6 mt-4 px-0 infoMercado'>
                                <h5>Celular motorola moto g4 32 Gb + 3GB Ram${prod.titulo}</h5>
                            </div>
                            <div class='col-6 row justify-content-between'>
                                <div class='col-5 mt-5'>
                                    <h4>$ ${prod.precio}</h4>
                                </div>
                                <div class="col-3 mt-5">
                                    <input type="number" style="width:90%">
                                </div>
                                <div class='col-4 mt-5'>
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
                        <h5>Precio = $ ${precioTotal}</h5>
                        <h5>Descuento = $ ${descuento}</h5>

                    </div>
                    <h4 class='pl-1'>Total a pagar = $ ${precioTotal-descuento}</h4>
                    <div class='col-12 row justify-content-between mt-4'>
                        <button class='bg-primary text-white rounded p-2 noBorder col-5 botonCarrito' onclick='comprar()'>Comprar</button>
                        <button class='bg-primary text-white rounded p-2 noBorder col-5 botonCarrito' onclick='deleteCar()'>Vaciar Carrito</button>
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

function deleteCar(){
    console.log('delete');
    var preg = prompt('Estas seguro de que quieres vaciar el carrito?');
    if(preg){
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
}

function comprar(){
    console.log('comprar');
}
