// Validación que muestra un modal para completar todos los campos antes de enviar el formulario de creación de un nuevo usuario.
var formNU = document.querySelector('form');

// Campos de entrada obligatorios
//var camposObligatorios = ['rut', 'name', 'last_name', 'email', 'password', 'password_confirmation'];
// var inputsObligatorios = Array.from(camposObligatorios, nombreCampo => `input[name="${nombreCampo}"]`);
var inputsObligatorios = ['input[name="rut"]', 'input[name="name"]', 'input[name="last_name"]', 'input[name="email"]', 'input[name="password"]', 'input[name="password_confirmation"]'];


// Campos de rol
//var camposRol = ['rol_usuario_superadmin', 'rol_usuario_admin', 'rol_usuario_prevencionista', 'rol_usuario_consultor'];
// var selectsRol = Array.from(camposRol, nombreCampo => `select[name="${nombreCampo}"]`);
var selectsRol = ['select[name="rol_usuario_superadmin"]', 'select[name="rol_usuario_admin"]', 'select[name="rol_usuario_prevencionista"]', 'select[name="rol_usuario_consultor"]'];


// Manejador de eventos para enviar formulario
function enviarFormulario_nuevoUsuario(evento) {
    // Verificar si los campos obligatorios están completados
    //var camposCompletados = inputsObligatorios.every(nombreCampo => {
    var camposCompletados = inputsObligatorios.every(selector => {
        var valorCampo = document.querySelector(selector).value;

        //var valorCampo = document.querySelector(`input[name="${nombreCampo}"]`).value;
        return valorCampo !== '';
    });



    // Verificar si al menos uno de los campos de rol está seleccionado
    var camposRolSeleccionados = selectsRol.some(selector => {
    //var camposRolSeleccionados = selectsRol.some(nombreCampo => {
        var valorCampo = document.querySelector(selector).value;
        //var valorCampo = document.querySelector(`select[name="${nombreCampo}"]`).value;

        return valorCampo !== '';
    });



    // Si los campos obligatorios no están completados o no hay campos de rol seleccionados, prevenir el envío del formulario
    if (!camposCompletados || !camposRolSeleccionados) {
        evento.preventDefault();

        // Mostrar un mensaje de error al usuario
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor complete todos los campos obligatorios antes de enviar el formulario, y seleccione al menos una opción de rol.',
            });
        }
}

// Agregar un manejador de eventos para enviar formulario
formNU.addEventListener('submit', enviarFormulario_nuevoUsuario);
