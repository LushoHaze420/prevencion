//Obtener elementos del DOM
var checkboxRecuerdame = document.getElementById("recuerdame");
var inputUsuario = document.getElementById("usuario");

//Comprobar si hay un valor guardado y actualizar el campo de entrada
if (localStorage.getItem("usuarioRecordado")) {
    inputUsuario.value = localStorage.getItem("usuarioRecordado");
    checkboxRecuerdame.checked = true;
}

// Escuchar cambios en el checkbox "Recuérdame"
checkboxRecuerdame.addEventListener("change", function(event) {
    if (checkboxRecuerdame.checked) {
        localStorage.setItem("usuarioRecordado", inputUsuario.value);
    } else {
        localStorage.removeItem("usuarioRecordado");
    }
});

