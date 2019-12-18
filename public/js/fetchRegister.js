function getProv(pais){


    fetch('/Provincias/get/'+pais)
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            let selectProvincia = document.getElementById('provincia');

            selectProvincia.innerHTML = '';
            data.map(function (prov) {
                const templateLiteral = `
                <option value="${prov.id}">${prov.nombre_provincia} </option>
                `;


            selectProvincia.innerHTML = selectProvincia.innerHTML.concat(templateLiteral);

            })
        })
        .catch(function(error){
            console.log(error);
        })
}
