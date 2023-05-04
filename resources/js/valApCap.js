const inputSoloLetras_ac = document.getElementById('soloLetras_ac');  //solo admite letras
inputSoloLetras_ac.addEventListener('keydown', (event) => {
    const teclaPresionada_ac = event.key;
    const letrasPermitidas_ac = /^[a-zA-Z]+$/;

    if (!teclaPresionada_ac.match(letrasPermitidas_ac)) {
        event.preventDefault();
    }
});
