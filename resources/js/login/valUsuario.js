//no numeros, es correo
var inputSinNumeros_valUsuario = document.getElementById("usuario"); // admite cualquier carácter excepto números

inputSinNumeros_valUsuario.addEventListener("input", function(event) {
    var value = inputSinNumeros_valUsuario.value;
    var newValue = value.replace(/[0-9]/g, ''); // elimina los números

    if (newValue !== value) {
        inputSinNumeros_valUsuario.value = newValue;
    }
});
