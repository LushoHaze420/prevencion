// crear archivo js para este script
const inputSoloLetras_np = document.getElementById('soloLetras_np');  //solo admite letras
inputSoloLetras_np.addEventListener('keydown', (event) => {
    const teclaPresionada_np = event.key;
    const letrasPermitidas_np = /^[a-zA-Z]+$/;

    if (!teclaPresionada_np.match(letrasPermitidas_np)) {
        event.preventDefault();
    }
});
