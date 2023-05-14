const inputField = document.getElementById("rut_prev");
const maximo_caracteres = document.getElementById("maximo_caracteres");

inputField.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars = inputField.getAttribute("maxlength");
    const currentChars = inputField.value.length;

    if (currentChars >= maxChars) {
        maximo_caracteres.innerHTML = `Máximo ${maxChars} caracteres, sin puntos ni guión`;
    } else {
        maximo_caracteres.innerHTML = "";
    }
});
