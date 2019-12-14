
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
                data.map(function (prod) {
                    precioTotal = precioTotal + prod.precio;
                    const templateLiteral = `
                    <div class=' row justify-content-around bg-white p-2 mt-1'>
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
                const templateLiteral2 = `<h2 class="text-center">Menu</h2> <br>
                <div class="row justify-content-around p-2">
                <div class="col-12">
                    <h4>Precio total = ${precioTotal}</h4>
                </div>
                <div class='col-12 row justify-content-between mt-4'>
                    <button class='bg-primary text-white rounded p-2 noBorder col-5' onclick='deleteCar()'>Comprar</button>
                    <button class='bg-primary text-white rounded p-2 noBorder col-5' onclick='comprar()'>Vaciar Carrito</button>
                </div>
            </div>`;
                menu.innerHTML = templateLiteral2;
                });


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
