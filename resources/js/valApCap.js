// const inputSoloLetras_ac = document.getElementById('soloLetras_ac');  //solo admite letras
// inputSoloLetras_ac.addEventListener('keydown', (event) => {
//     const teclaPresionada_ac = event.key;
//     const letrasPermitidas_ac = /^[a-zA-Z]+$/;

//     if (!teclaPresionada_ac.match(letrasPermitidas_ac)) {
//         event.preventDefault();
//     }
// });

// VALIDACION PARA APELLIDO DEL CAPACITADO
const inputLetrasYEspacios = document.getElementById('soloLetras_ac');  // Admite letras y espacios

inputLetrasYEspacios.addEventListener('input', (event) => {
    const contenido = event.target.value;
    const letrasYEspaciosPermitidos = /^[a-zA-Z\s]*$/;

    if (!contenido.match(letrasYEspaciosPermitidos)) {
        event.target.value = contenido.replace(/[^a-zA-Z\s]/g, '');
    }
});
