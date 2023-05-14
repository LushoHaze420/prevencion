//validacion que solo admite numeros para campo rut en formulario para nuevo usuario en vista administrador.
var inputSoloNumeros_rutNU2 = document.getElementById("rutNU");
inputSoloNumeros_rutNU2.addEventListener("input", function(event) {
    var value = inputSoloNumeros_rutNU2.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_rutNU2.value = newValue;
    }
});
