//solo admite numeros en cuadro rut a consultar
var inputSoloNumeros_abr = document.getElementById("admin_busqueda_rut");
inputSoloNumeros_abr.addEventListener("input", function(event) {
    var value = inputSoloNumeros_abr.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_abr.value = newValue;
    }
});
