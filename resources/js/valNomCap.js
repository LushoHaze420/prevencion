// const inputSoloLetras_nc = document.getElementById('soloLetras_nc');  //solo admite letras
// inputSoloLetras_nc.addEventListener('keydown', (event) => {
//     const teclaPresionada_nc = event.key;
//     const letrasPermitidas_nc = /^[a-zA-Z]+$/;

//     if (!teclaPresionada_nc.match(letrasPermitidas_nc)) {
//         event.preventDefault();
//     }
// });

// VALIDACION PARA NOMBRE DEL CAPACITADO
const inputLetrasYEspacios = document.getElementById('soloLetras_nc');  // Admite letras y espacios

inputLetrasYEspacios.addEventListener('input', (event) => {
    const contenido = event.target.value;
    const letrasYEspaciosPermitidos = /^[a-zA-Z\s]*$/;

    if (!contenido.match(letrasYEspaciosPermitidos)) {
        event.target.value = contenido.replace(/[^a-zA-Z\s]/g, '');
    }
});
