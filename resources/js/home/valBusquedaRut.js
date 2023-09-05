//validacion para un maximo de 9 caracrteres para el campo rut en busqueda
const inputField_br = document.getElementById("busqueda_rut");
const maximo_carac_br = document.getElementById("maximo_caracteres_br");

inputField_abr.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_br = inputField_br.getAttribute("maxlength");
    const currentChars_br = inputField_br.value.length;

    if (currentChars_br >= maxChars_br) {
        maximo_carac_br.innerHTML = `Máximo ${maxChars_br} caracteres, sin puntos ni guión`;
    } else {
        maximo_carac_br.innerHTML = "";
    }
});
