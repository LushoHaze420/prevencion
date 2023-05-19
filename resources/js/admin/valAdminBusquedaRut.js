//validacion para un maximo de 9 caracrteres para el campo rut en busqueda
const inputField_abr = document.getElementById("admin_busqueda_rut");
const maximo_carac_abr = document.getElementById("maximo_caracteres_abr");

inputField_abr.addEventListener("input", function() {  //maximo 9 caracteres
    const maxChars_abr = inputField_abr.getAttribute("maxlength");
    const currentChars_abr = inputField_abr.value.length;

    if (currentChars_abr >= maxChars_abr) {
        maximo_carac_abr.innerHTML = `Máximo ${maxChars_abr} caracteres, sin puntos ni guión`;
    } else {
        maximo_carac_abr.innerHTML = "";
    }
});
