//validacion que solo admite numeros para campo rut en formulario para nuevo usuario en vista administrador.
var inputSoloNumeros_valContra2 = document.getElementById("contraNU");
inputSoloNumeros_valContra2.addEventListener("input", function(event) {
    var value = inputSoloNumeros_valContra2.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_valContra2.value = newValue;
    }
});
