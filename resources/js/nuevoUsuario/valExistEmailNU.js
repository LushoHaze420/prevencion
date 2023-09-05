import axios from 'axios';
import Swal from 'sweetalert2';


$(document).ready(function() {
    $('#formStoreNU').submit(function(e) {
        e.preventDefault();
        var email = $('#emailNU').val();

        // Realiza una petición AJAX para verificar si el email ya existe
        $.ajax({
            url: '{{ route("verificarEmail") }}',
            method: 'POST',
            data: { email: email },
            success: function(response) {
                if (response.exists) {
                    // Muestra el mensaje de SweetAlert si el email ya existe
                    Swal.fire(
                        'Error',
                        'El email ya existe en la base de datos.',
                        'error'
                    );
                } else {
                    // Envía el formulario si el email no existe
                    $('#formStoreNU').unbind('submit').submit();
                }
            }
        });
    });
});
