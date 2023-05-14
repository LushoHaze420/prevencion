//validacion que admite hasta nueve caracteres para campo rut, en formulario, para nuevo usuario desde vista administrador.
const inputField_rutNU = document.getElementById("rutNU");
const maximo_caracteres_rutNU = document.getElementById("maximo_caracteres_rutNU");

inputField.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_rutNU = inputField_rutNU.getAttribute("maxlength");
    const currentChars_rutNU = inputField_rutNU.value.length;

    if (currentChars_rutNU >= maxChars_rutNU) {
        maximo_caracteres_rutNU.innerHTML = `Máximo ${maxChars_rutNU} caracteres, sin puntos ni guión`;
    } else {
        maximo_caracteres_rutNU.innerHTML = "";
    }
});



