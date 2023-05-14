//validacion para rut de login con maximo nueve caracteres.
const inputField_valUsuario = document.getElementById("usuario");
const maximo_caracteres_valUsuario = document.getElementById("maximo_caracteres_valUsuario");

inputField_valUsuario.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_valUsuario = inputField_valUsuario.getAttribute("maxlength");
    const currentChars_valUsuario = inputField_valUsuario.value.length;

    if (currentChars_valUsuario >= maxChars) {
        maximo_caracteres_valUsuario.innerHTML = `Máximo ${maxChars_valUsuario} caracteres, sin puntos ni guión`;
    } else {
        maximo_caracteres_valUsuario.innerHTML = "";
    }
});
