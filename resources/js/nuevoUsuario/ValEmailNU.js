//validacion para que no admita numeros en el campo email de nuevo usuario
const inputSoloLetras_emailNU = document.getElementById('emailNU');
inputSoloLetras_emailNU.addEventListener('keydown', (event) => {
    const teclaPresionada_emailNU = event.key;
    const caracteresPermitidos_emailNU = /^[a-zA-Z.@_-]+$/;

    if (!caracteresPermitidos_emailNU.test(teclaPresionada_emailNU)) {
        event.preventDefault();
    }
});
