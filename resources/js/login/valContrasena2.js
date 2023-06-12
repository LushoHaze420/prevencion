//validacion para campo usuario (rut) en login que solo admite numeros.
var inputSoloNumeros_valContrasena = document.getElementById("contrasena"); //solo admite numeros
inputSoloNumeros_valContrasena.addEventListener("input", function(event) {
    var value = inputSoloNumeros_valContrasena.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_valContrasena.value = newValue;
    }
});
