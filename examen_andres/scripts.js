function mostrarFoto3() {
    document.getElementById("foto").style.display = "block";
}


function ocultarFoto3() {
    document.getElementById("foto").style.display = "none";

}

function validarTelefono3() {
    var telefono = document.getElementById("telefono").value;

    var mensaje = new Array();
    var flagNumCaracteres = false;
    var flagNumber = false;
    var n = telefono.length;
    if (n < 9) {
        flagNumCaracteres = true;
        mensaje.push("El teléfono debe tener exactamente 10 números");
    }
    var numeros = 0;
    for (var i = 0; i < n; i++) {
        if ((telefono.charCodeAt(i) >= 48) && (telefono.charCodeAt(i) <= 57)) numeros++;
    }
    if (numeros == 0) {
        flagNumber = true;
        mensaje.push("El teléfono debe solo contener números del 0 al 9");
    }




    if (!flagNumCaracteres && !flagNumber) {
        document.getElementById("msg").innerHTML = "";
        var li = document.createElement("li");
        li.innerHTML = "<span class = 'telefonoCorrecto'>El teléfono ingresado es correcto</span>";
        document.getElementById("msg").appendChild(li);
    } else {
        imprimirMensajes(mensaje);
    }
}

function imprimirMensajes(errores) {
    var listaErrores = document.getElementById("msg");
    listaErrores.innerHTML = "";


    errores.forEach(function (error) {
        var li = document.createElement("li");
        li.innerHTML = "<span class ='error'>" + error + "</span>";
        listaErrores.appendChild(li);
    })
}