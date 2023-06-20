//validacion que admite hasta nueve caracteres para campo contraseña, en formulario, para nuevo usuario desde vista administrador.
const inputField_repcontraNU = document.getElementById("repContraNU");
const maximo_caracteres_repContraNU = document.getElementById("maximo_caracteres_repContraNU");

inputField.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_repContraNU = inputField_repContraNU.getAttribute("maxlength");
    const currentChars_repContraNU = inputField_repContraNU.value.length;

    if (currentChars_repContraNU >= maxChars_repContraNU) {
        maximo_caracteres_repContraNU.innerHTML = `Máximo ${maxChars_repContraNU} caracteres, sin puntos ni guión`;
    } else {
        maximo_caracteres_repContraNU.innerHTML = "";
    }
});



