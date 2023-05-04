var inputSoloNumeros = document.getElementById("rut_prev"); //solo admite numeros
inputSoloNumeros.addEventListener("input", function(event) {
    var value = inputSoloNumeros.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros.value = newValue;
    }
});
