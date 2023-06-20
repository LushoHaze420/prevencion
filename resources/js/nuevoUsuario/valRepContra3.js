//validacion para campo repetir contraseña, compara valores ingresados
document.getElementById("repContraNU").addEventListener("input", compararContraseñas);
document.getElementById("contraNU").addEventListener("input", compararContraseñas);

function compararContraseñas() {
    var repContra = document.getElementById("repContraNU").value;
    var contra = document.getElementById("contraNU").value;
    var repContraAlertContainer = document.getElementById("repContraAlertContainer");
    var contraAlert = document.getElementById("contraAlert");

    if (repContra !== contra) {
        repContraAlertContainer.innerHTML = "<div class='alert alert-danger' role='alert'>Las contraseñas no coinciden.</div>";
    } else {
        repContraAlertContainer.innerHTML = ""; // Limpiar el contenido del contenedor de alerta
        contraAlert.innerHTML = ""; // Limpiar el mensaje de alerta si las contraseñas coinciden
    }
}
