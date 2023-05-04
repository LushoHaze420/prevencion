const inputSoloLetras_nc = document.getElementById('soloLetras_nc');  //solo admite letras
inputSoloLetras_nc.addEventListener('keydown', (event) => {
    const teclaPresionada_nc = event.key;
    const letrasPermitidas_nc = /^[a-zA-Z]+$/;

    if (!teclaPresionada_nc.match(letrasPermitidas_nc)) {
        event.preventDefault();
    }
});
