const inputSoloLetras_cc = document.getElementById('soloLetras_cc');  //solo admite letras
inputSoloLetras_cc.addEventListener('keydown', (event) => {
    const teclaPresionada_cc = event.key;
    const letrasPermitidas_cc = /^[a-zA-Z]+$/;

    if (!teclaPresionada_cc.match(letrasPermitidas_cc)) {
        event.preventDefault();
    }
});
