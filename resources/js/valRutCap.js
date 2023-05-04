//crear archivo js para este script
const inputField_rc = document.getElementById("rut_cap");
const maximo_carac_rc = document.getElementById("maximo_caracteres_rc");

inputField_rc.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_rc = inputField_rc.getAttribute("maxlength");
    const currentChars_rc = inputField_rc.value.length;

    if (currentChars_rc >= maxChars_rc) {
        maximo_carac_rc.innerHTML = `Máximo ${maxChars_rc} caracteres, sin puntos ni guión`;
    } else {
        maximo_carac_rc.innerHTML = "";
    }
});


