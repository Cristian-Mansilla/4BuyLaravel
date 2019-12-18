

    fetchProds();


    $('.brandLi').click(function(){

        var div = document.getElementById('x');

        div.innerHTML = '';
        div.innerHTML = '<div id="loader" class="loader col-12 justify-content-center"><img src="/Imagenes/loader.gif" alt=""></div>';

        document.getElementById('loader').style.display = 'flex';
        setTimeout(fetchProds, 1500);

    });

    function fetchProds(){


        var brands = [];


        $('.brand').each(function(){
            if($(this).is(":checked")){
                brands.push($(this).val());
            }

        });


        var loc = location.pathname;

        var locArray = loc.split('/');


        var precio = document.getElementById('precio').value;


        if(brands && brands.length){
            var filtro = brands.toString();
        }else{
            var filtro = "none";
        }



        console.log('Ordenar por: ' + precio);
        console.log('Marca:'+filtro);

        var ruta = '/Filtro/'+filtro+'?categoria='+locArray[3]+'&precio='+precio;
        console.log(ruta);
        fetch(ruta)
            .then(function(response){
                console.log('Datos:'+response);
                return response.json();
            })
            .then(function(data){

                var div = document.getElementById('x');
                console.log(data);
                div.innerHTML = '';

                data.map(function (prod) {
                    const templateLiteral = `
            <div class='col-12 bg-white sombra mb-2' style="height:150px;">
                <div class="col-12 row justify-content-between">


                    <div class='col-md-4 col-3 mt-lg-0 mt-md-0 mt-sm-0 mt-4 p-4'>
                        <img src='${prod.ruta_imagen}' class="imgAllProd">
                    </div>
                    <div class='col-8 text-center mt-5 p-1 row justify-content-center'>
                        <a href="/Productos/Detalle/${prod.id} " class='col-12 text-center text-dark'>${prod.titulo}</a>

                        <p class='col-md-6 col-6 color-grey infoAllProd'>$ ${prod.precio}</p>
                        <p class='col-md-6 col-6 color-grey infoAllProd'>Stock: ${prod.stock}</p>

                    </div>

                </div>
            </div>`;


                div.innerHTML = div.innerHTML.concat(templateLiteral);
                });
                document.getElementById('loader').style.display = 'none';


            })
            .catch(function(error){
                console.log(error);
            })
    }



