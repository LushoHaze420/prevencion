//validacion para formulario, de nuevo usuario, que admite solo letras.
const inputSoloLetras_apNU = document.getElementById('apellidoNU');  //solo admite letras
inputSoloLetras_apNU.addEventListener('keydown', (event) => {
    const teclaPresionada_apNU = event.key;
    const letrasPermitidas_apNU = /^[a-zA-Z]+$/;

    if (!teclaPresionada_apNU.match(letrasPermitidas_apNU)) {
        event.preventDefault();
    }
});
