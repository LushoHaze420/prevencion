//validacion para contraseña de login con maximo nueve caracteres.
const inputField_valContrasena = document.getElementById("contrasena");
const maximo_caracteres_valContrasena = document.getElementById("maximo_caracteres_valContrasena");

inputField_valContrasena.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_valContrasena = inputField_valContrasena.getAttribute("maxlength");
    const currentChars_valContrasena = inputField_valContrasena.value.length;

    if (currentChars_valContrasena >= maxChars) {
        maximo_caracteres_valContrasena.innerHTML = `Máximo ${maxChars_valContrasena} caracteres, sin puntos ni guión`;
    } else {
        maximo_caracteres_valContrasena.innerHTML = "";
    }
});

