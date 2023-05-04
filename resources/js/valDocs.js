var form = document.querySelector('form');
//campos de entrada obligatorios
var camposObligatorios = ['rut_prev', 'nombre_prev', 'apellidos_prev', 'rut_cap','nombre_cap', 'apellidos_cap', 'rol_cap', 'documentos'];
var inputsObligatorios = document.querySelectorAll(camposObligatorios.map(nombreCampo => `input[name="${nombreCampo}"]`).join(', '));

// Manejador de eventos para enviar formulario
function enviarFormulario(evento) {
// Verificar si los campos obligatorios están completados
    var camposCompletados = Array.from(inputsObligatorios).every(input => input.value !== '');

    // Si los campos obligatorios no están completados, prevenir el envío del formulario
    if (!camposCompletados) {
        evento.preventDefault();

        // Mostrar un mensaje de error al usuario
        alert('Por favor, complete todos los campos y los documentos antes de enviar el formulario.');
    }
}

// Agregar un manejador de eventos para enviar formulario
var formulario = document.querySelector('form');
formulario.addEventListener('submit', enviarFormulario);
