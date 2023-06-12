//validacion que admite hasta nueve caracteres para campo rut, en formulario, para nuevo usuario desde vista administrador.
const inputField_valContra = document.getElementById("contraNU");
const maximo_caracteres_valContra = document.getElementById("maximo_caracteres_valContra");

inputField.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_valContra = inputField_rutNU.getAttribute("maxlength");
    const currentChars_valContra = inputField_valContra.value.length;

    if (currentChars_valContra >= maxChars_rutNU) {
        maximo_caracteres_valContra.innerHTML = `Máximo ${maxChars_valContra} caracteres, sin puntos ni guión`;
    } else {
        maximo_caracteres_valContra.innerHTML = "";
    }
});



