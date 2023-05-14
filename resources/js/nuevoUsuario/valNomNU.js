//validacion que solo admite letras para formulario de registro nuevo usuario desde vista administrador.
const inputSoloLetras_nomNU = document.getElementById('nombreNU');
inputSoloLetras_nomNU.addEventListener('keydown', (event) => {
    const teclaPresionada_nomNU = event.key;
    const letrasPermitidas_nomNU = /^[a-zA-Z]+$/;

    if (!teclaPresionada_nomNU.match(letrasPermitidas_nomNU)) {
        event.preventDefault();
    }
});
