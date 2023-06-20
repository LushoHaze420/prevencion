//validacion que solo admite numeros para campo contraseña en formulario para nuevo usuario en vista administrador.
var inputSoloNumeros_repContraNU = document.getElementById("repContraNU");
inputSoloNumeros_repContraNU.addEventListener("input", function(event) {
    var value = inputSoloNumeros_repContraNU.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_repContraNU.value = newValue;
    }
});
