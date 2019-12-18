

document.getElementById("enviar").addEventListener("click", function(event){
    event.preventDefault()
    let cupon = document.getElementById('cupon').value;
    fetch('Cupon/canjear/'+cupon)
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            console.log(data.status);
            if(data.status == 'ok'){
                swal("El cupon se agrego con exito", {
                    icon: "success",
                });
            }else if(data.status == 'no'){
                swal("El cupon ingresado ya fue utilizado", {
                    icon: "error",
                });
            }else{
                swal("Ingrese un cupon valido", {
                    icon: "error",
                });
            }
        })
        .catch(function(error){
            console.log(error);
        })
});

