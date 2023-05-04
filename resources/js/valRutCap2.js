var inputSoloNumeros_rc = document.getElementById("rut_cap"); //solo admite numeros
inputSoloNumeros_rc.addEventListener("input", function(event) {
    var value = inputSoloNumeros_rc.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_rc.value = newValue;
    }
});
