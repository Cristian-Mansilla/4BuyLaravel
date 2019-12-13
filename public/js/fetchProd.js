$(function(){
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
        var modelo = [];
        var ram = [];
        var memoriaInterna = [];
        var linea = [];
        var tamañoPantalla = [];
        var resolucion = [];
        var capacidad = [];
        var tipoPantalla = [];
        var tamaño = [];
        var pasadoString = [];

        $('.brand').each(function(){
            if($(this).is(":checked")){
                brands.push($(this).val());
            }

        });





        $('.modelo').each(function(){
            if($(this).is(":checked")){
                modelo.push($(this).val());
            }

        });
        $('.ram').each(function(){
            if($(this).is(":checked")){
                ram.push($(this).val());
            }

        });
        $('.memoriaInterna').each(function(){
            if($(this).is(":checked")){
                memoriaInterna.push($(this).val());
            }

        });
        $('.linea').each(function(){
            if($(this).is(":checked")){
                linea.push($(this).val());
            }

        });

        $('.tamañoPantalla').each(function(){
            if($(this).is(":checked")){
                tamañoPantalla.push($(this).val());
            }

        });

        $('.resolucion').each(function(){
            if($(this).is(":checked")){
                resolucion.push($(this).val());
            }

        });

        $('.capacidad').each(function(){
            if($(this).is(":checked")){
                capacidad.push($(this).val());
            }

        });

        $('.tipoPantalla').each(function(){
            if($(this).is(":checked")){
                tipoPantalla.push($(this).val());
            }

        });

        $('.tamaño').each(function(){
            if($(this).is(":checked")){
                tamaño.push($(this).val());
            }

        });


        var loc = location.pathname;

        var locArray = loc.split('/');




        if(brands && brands.length){
            var filtro = brands.toString();
        }else{
            var filtro = "none";
        }

        if(modelo && modelo.length){
            var modelo = modelo.toString();
        }else{
            var modelo = "none";
        }

        if(ram && ram.length){
            var ram = ram.toString();
        }else{
            var ram = "none";
        }

        if(memoriaInterna && memoriaInterna.length){
            var memoriaInterna = memoriaInterna.toString();
        }else{
            var memoriaInterna = "none";
        }

        if(linea && linea.length){
            var linea = linea.toString();
        }else{
            var linea = "none";
        }

        if(tamañoPantalla && tamañoPantalla.length){
            var tamañoPantalla = tamañoPantalla.toString();
        }else{
            var tamañoPantalla = "none";
        }

        if(resolucion && resolucion.length){
            var resolucion = resolucion.toString();
        }else{
            var resolucion = "none";
        }

        if(capacidad && capacidad.length){
            var capacidad = capacidad.toString();
        }else{
            var capacidad = "none";
        }

        if(tipoPantalla && tipoPantalla.length){
            var tipoPantalla = tipoPantalla.toString();
        }else{
            var tipoPantalla = "none";
        }

        if(tamaño && tamaño.length){
            var tamaño = tamaño.toString();
        }else{
            var tamaño = "none";
        }

        console.log('Modelo :'+modelo);
        console.log('Ram: '+ram);
        console.log('MemoriaInterna: '+memoriaInterna);
        console.log('Lineas: '+linea);
        console.log('TamañoPantalla: '+tamañoPantalla);
        console.log('Resolucion: '+resolucion);
        console.log('Capacidad: '+capacidad);
        console.log('TipoPantalla: '+tipoPantalla);
        console.log('Tamaño: '+tamaño);

        console.log('Marca:'+filtro);
        var ruta = '/Filtro/'+filtro+'?categoria='+locArray[3];
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


                    <div class='col-4 mt-lg-0 mt-md-0 mt-sm-0 mt-4 p-4'>
                        <img src='${prod.ruta_imagen}' class="imgAllProd">
                    </div>
                    <div class='col-8 text-center mt-5 p-1 row justify-content-center'>
                        <a href="/Productos/Detalle/${prod.id} " class='col-12 text-center text-dark'>${prod.titulo}</a>

                        <p class='col-6 color-grey infoAllProd'>$ ${prod.precio}</p>
                        <p class='col-6 color-grey infoAllProd'>Stock: ${prod.stock}</p>

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
});
