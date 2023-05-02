<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    @yield('tituloPaginaM')
    @yield('tituloPaginaC')
    @yield('tituloPaginaA')
    @yield('tituloPaginaGJ')
    @yield('tituloPaginaCA')
    @yield('tituloPaginaAD')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/app.css"> {{-- revisar --}}
</head>

<body class="p-3 m-1 border-1 bd-example">

    <div class="titulos">
        <h2>
            <center>Formulario de ingreso para capacitaciones</center>
        </h2>
        @yield('tituloArea')
    </div>
    <div class="center g-5 p-1 border-2 botonListadoCap">{{-- centrar boton --}}
        @yield('botonListadoMantenimiento')
        @yield('botonListadoCajeras')
        @yield('botonListadoAseadores')
        @yield('botonListadoGeryJef')
        @yield('botonListadoCondyAux')
        @yield('botonListadoAdministrativos')
    </div>
        @yield('storeCapM')
        @yield('storeCapC')
        @yield('storeCapA')
        @yield('storeCapGJ')
        @yield('storeCapCA')
        @yield('storeCapAd')
        @csrf
        {{-- Rut prevencionista --}}
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="rut_prev" class="form-label"><b>Rut prevencionista</b></label>

                <input type="text" name="rut_prev" id="rut_prev" class="form-control" placeholder="Rut del prevencionista*" {{--name="rut_prev" conecta con tabla de bd--}}
                    aria-label="Rut prevencionista" maxlength="9">
                    <span id="maximo_caracteres" class="form-text"></span>

                    <script> //crear archivo js para este script
                        const inputField = document.getElementById("rut_prev");
                        const maximo_caracteres = document.getElementById("maximo_caracteres");

                        inputField.addEventListener("input", function() {  //maximo 9 caracteres
                            const maxChars = inputField.getAttribute("maxlength");
                            const currentChars = inputField.value.length;

                            if (currentChars >= maxChars) {
                                maximo_caracteres.innerHTML = `Máximo ${maxChars} caracteres, sin puntos ni guión`;
                            } else {
                                maximo_caracteres.innerHTML = "";
                            }
                        });

                        var inputSoloNumeros = document.getElementById("rut_prev"); //solo admite numeros
                        inputSoloNumeros.addEventListener("input", function(event) {
                            var value = inputSoloNumeros.value;
                            var newValue = value.replace(/[^0-9]/g, '');
                            if (newValue !== value) {
                                inputSoloNumeros.value = newValue;
                            }
                        });
                    </script>
            </div>
        </div>

        <!--nombre y apellidos prevencionista-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="" class="form-label"><b>Nombre prevencionista</b></label>
                <input type="text" name="nombre_prev" id="soloLetras_np" class="form-control" placeholder="Ingrese nombre del prevencionista"
                    aria-label="Nombre prevencionista">
                <script> // crear archivo js para este script
                    const inputSoloLetras_np = document.getElementById('soloLetras_np');  //solo admite letras
                    inputSoloLetras_np.addEventListener('keydown', (event) => {
                        const teclaPresionada_np = event.key;
                        const letrasPermitidas_np = /^[a-zA-Z]+$/;

                        if (!teclaPresionada_np.match(letrasPermitidas_np)) {
                            event.preventDefault();
                        }
                    });
                </script>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label"><b>Apellidos prevencionista</b></label>
                <input type="text" name="apellidos_prev" id="soloLetras_ap" class="form-control" placeholder="Ingrese Apellidos del prevencionista"
                    aria-label="Apellido prevencionista">

                    <script> // crear archivo js para este script
                        const inputSoloLetras_ap = document.getElementById('soloLetras_ap');  //solo admite letras
                        inputSoloLetras_ap.addEventListener('keydown', (event) => {
                            const teclaPresionada_ap = event.key;
                            const letrasPermitidas_ap = /^[a-zA-Z]+$/;

                            if (!teclaPresionada_ap.match(letrasPermitidas_ap)) {
                                event.preventDefault();
                            }
                        });
                    </script>
            </div>
        </div>

        <!--rut del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="rut_cap" class="form-label"><b>Rut capacitado</b></label>
                <input type="text" name="rut_cap" id="rut_cap" class="form-control" placeholder="Ingrese Rut del capacitado*" aria-label="Rut capacitado" maxlength="9">
                <span id="maximo_caracteres_rc" class="form-text"></span>

                <script> //crear archivo js para este script
                    const inputField_rc = document.getElementById("rut_cap");
                    const maximo_carac_rc = document.getElementById("maximo_caracteres_rc");

                    inputField_rc.addEventListener("input", function() {  //maximo 9 caracteres
                        const maxChars_rc = inputField_rc.getAttribute("maxlength");
                        const currentChars_rc = inputField_rc.value.length;

                        if (currentChars_rc >= maxChars_rc) {
                            maximo_carac_rc.innerHTML = `Máximo ${maxChars_rc} caracteres, sin puntos ni guión`;
                        } else {
                            maximo_carac_rc.innerHTML = "";
                        }
                    });

                    var inputSoloNumeros_rc = document.getElementById("rut_cap"); //solo admite numeros
                    inputSoloNumeros_rc.addEventListener("input", function(event) {
                        var value = inputSoloNumeros_rc.value;
                        var newValue = value.replace(/[^0-9]/g, '');
                        if (newValue !== value) {
                            inputSoloNumeros_rc.value = newValue;
                        }
                    });
                </script>
            </div>
        </div>

        <!--nombre y apellidos capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="" class="form-label"><b>Nombre capacitado</b></label>
                <input type="text" name="nombre_cap" id="soloLetras_nc" class="form-control" placeholder="Ingrese nombre del capacitado"
                    aria-label="Nombre capacitado">
                    <script> // crear archivo js para este script
                        const inputSoloLetras_nc = document.getElementById('soloLetras_nc');  //solo admite letras
                        inputSoloLetras_nc.addEventListener('keydown', (event) => {
                            const teclaPresionada_nc = event.key;
                            const letrasPermitidas_nc = /^[a-zA-Z]+$/;

                            if (!teclaPresionada_nc.match(letrasPermitidas_nc)) {
                                event.preventDefault();
                            }
                        });
                    </script>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label"><b>Apellidos capacitado</b></label>
                <input type="text" name="apellidos_cap" id="soloLetras_ac" class="form-control" placeholder="Ingrese Apellidos del capacitado"
                    aria-label="Apellidos capacitado">
                    <script> // crear archivo js para este script
                        const inputSoloLetras_ac = document.getElementById('soloLetras_ac');  //solo admite letras
                        inputSoloLetras_ac.addEventListener('keydown', (event) => {
                            const teclaPresionada_ac = event.key;
                            const letrasPermitidas_ac = /^[a-zA-Z]+$/;

                            if (!teclaPresionada_ac.match(letrasPermitidas_ac)) {
                                event.preventDefault();
                            }
                        });
                    </script>
            </div>
        </div>

            <!--cargo del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3 "><label for="" class="form-label"><b>Rol capacitado</b></label>
                <input type="text" name="rol_cap" id="soloLetras_cc" class="form-control" placeholder="Ingrese Cargo del capacitado*" aria-label="Cargo capacitado">
                <script> // crear archivo js para este script
                    const inputSoloLetras_cc = document.getElementById('soloLetras_cc');  //solo admite letras
                    inputSoloLetras_cc.addEventListener('keydown', (event) => {
                        const teclaPresionada_cc = event.key;
                        const letrasPermitidas_cc = /^[a-zA-Z]+$/;

                        if (!teclaPresionada_cc.match(letrasPermitidas_cc)) {
                            event.preventDefault();
                        }
                    });
                </script>
            </div>
        </div>

        <!--multiple document upload-->
        <div class="col-md-3 mb-3 p-2 border-2">
            <label for="formFileMultiple" class="form-label"><b>Documentos de la capacitación</b></label>
            <input class="form-control" type="file" name="documentos" id="formFileMultiple" multiple>
            <br>
            <button class="btn btn-success" type="submit">Subir Documentos</button>
            {{-- <a href="personalmantenimiento/listadocapacitaciones" class="btn btn-success" type="submit">Subir documentos</a> --}}

            <script> //crear archivo js para este script
                var form = document.querySelector('form');
                //campos de entrada obligatorios
                var camposObligatorios = ['rut_prev', 'nombre_prev', 'apellidos_prev', 'rut_cap','nombre_cap', 'apellidos_cap', 'rol_cap', 'documentos'];
                var inputsObligatorios = document.querySelectorAll(camposObligatorios.map(nombreCampo => `input[name="${nombreCampo}"]`).join(', '));

                // Manejador de eventos para enviar formulario
                function enviarFormulario(evento) {
                // Verificar si los campos obligatorios están completados
                    var camposCompletados = Array.from(inputsObligatorios).every(input => input.value !== '');

                    // Si los campos obligatorios no están completados, prevenir el envío del formulario
                    if (!camposCompletados) {
                        evento.preventDefault();

                        // Mostrar un mensaje de error al usuario
                        alert('Por favor, complete todos los campos y los documentos antes de enviar el formulario.');
                    }
                }

                // Agregar un manejador de eventos para enviar formulario
                var formulario = document.querySelector('form');
                formulario.addEventListener('submit', enviarFormulario);
            </script>

        </div>
    </form>
</body>

</html>


