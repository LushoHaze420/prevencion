//solo admite numeros en cuadro rut a consultar
var inputSoloNumeros_pbr = document.getElementById("prev_busqueda_rut");
inputSoloNumeros_pbr.addEventListener("input", function(event) {
    var value = inputSoloNumeros_pbr.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_pbr.value = newValue;
    }
});
