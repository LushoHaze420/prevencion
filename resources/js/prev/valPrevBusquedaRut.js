//validacion para un maximo de 9 caracrteres para el campo rut en busqueda
const inputField_pbr = document.getElementById("prev_busqueda_rut");
const maximo_carac_pbr = document.getElementById("maximo_caracteres_pbr");

inputField_pbr.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_pbr = inputField_pbr.getAttribute("maxlength");
    const currentChars_pbr = inputField_pbr.value.length;

    if (currentChars_pbr >= maxChars_pbr) {
        maximo_carac_pbr.innerHTML = `Máximo ${maxChars_pbr} caracteres, sin puntos ni guión`;
    } else {
        maximo_carac_pbr.innerHTML = "";
    }
});
