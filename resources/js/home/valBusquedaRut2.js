//solo admite numeros en cuadro rut a consultar
var inputSoloNumeros_br = document.getElementById("busqueda_rut");
inputSoloNumeros_br.addEventListener("input", function(event) {
    var value = inputSoloNumeros_br.value;
    var newValue = value.replace(/[^0-9]/g, '');
    if (newValue !== value) {
        inputSoloNumeros_br.value = newValue;
    }
});
