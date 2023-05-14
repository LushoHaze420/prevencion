//validacion que arroja un modal para completar todos los campos antes de enviar el formulario de creacion de nuevo usuario.
var formNU = document.querySelector('form');
//campos de entrada obligatorios
var camposObligatorios = ['rut_NU', 'nombre_NU', 'apellido_NU', 'contra_NU','repetirContrasena_NU', 'rol_NU'];
var inputsObligatorios = document.querySelectorAll(camposObligatorios.map(nombreCampo => `input[name="${nombreCampo}"]`).join(', '));

// Manejador de eventos para enviar formulario
function enviarFormulario_nuevoUsuario(evento) {
// Verificar si los campos obligatorios están completados
    var camposCompletados = Array.from(inputsObligatorios).every(input => input.value !== '');

    // Si los campos obligatorios no están completados, prevenir el envío del formulario
    if (!camposCompletados) {
        evento.preventDefault();

        // Mostrar un mensaje de error al usuario
        alert('Por favor, complete todos los campos antes de enviar el formulario.');
    }
}

// Agregar un manejador de eventos para enviar formulario
var formulario = document.querySelector('form');
formulario.addEventListener('submit', enviarFormulario_nuevoUsuario);
