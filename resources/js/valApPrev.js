// crear archivo js para este script
const inputSoloLetras_ap = document.getElementById('soloLetras_ap');  //solo admite letras
inputSoloLetras_ap.addEventListener('keydown', (event) => {
    const teclaPresionada_ap = event.key;
    const letrasPermitidas_ap = /^[a-zA-Z]+$/;

    if (!teclaPresionada_ap.match(letrasPermitidas_ap)) {
        event.preventDefault();
    }
});
