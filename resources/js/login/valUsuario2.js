//validacion para campo usuario (rut) en login que solo admite numeros.
var inputSoloNumeros_valUsuario = document.getElementById("usuario"); //solo admite numeros
inputSoloNumeros_valUsuario.addEventListener("input", function(event) {
    var value = inputSoloNumeros_valUsuario.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_valUsuario.value = newValue;
    }
});
