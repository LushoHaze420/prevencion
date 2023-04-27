<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Mantenimiento</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-1 border-1 bd-example">

    <div class="titulos">
        <h2>
            <center>Formulario de ingreso para capacitaciones</center>
        </h2>
        <h3>
            <center>Mantenimiento</center>
        </h3>
    </div>
    <div class="center g-5 p-1 border-2">{{-- centrar boton --}}
        <p><a class="btn btn-primary" href="{{route('listadoMantenimiento')}}">Ver listado de capacitaciones</a></p>
    </div>


    <form action="{{route('createCapacitacionM')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
        @csrf
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="rut_prev" class="form-label">Rut prevencionista</label>

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
                <label for="" class="form-label">Nombre prevencionista</label>
                <input type="text" name="nombre_prev" id="soloLetrasNombre" class="form-control" placeholder="Ingrese nombre del prevencionista"
                    aria-label="Nombre prevencionista">
                <script> // crear archivo js para este script
                    const inputSoloLetrasNombre = document.getElementById('soloLetrasNombre');  //solo admite letras
                    inputSoloLetrasNombre.addEventListener('keydown', (event) => {
                        const teclaPresionada = event.key;
                        const letrasPermitidas = /^[a-zA-Z]+$/;

                        if (!teclaPresionada.match(letrasPermitidas)) {
                            event.preventDefault();
                        }
                    });
                </script>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Apellidos prevencionista</label>
                <input type="text" name="apellidos_prev" id="soloLetrasApellido" class="form-control" placeholder="Ingrese Apellidos del prevencionista"
                    aria-label="Apellido paterno prevencionista">

                    <script> // crear archivo js para este script
                        const inputSoloLetrasApellido = document.getElementById('soloLetrasApellido');  //solo admite letras
                        inputSoloLetrasApellido.addEventListener('keydown', (event) => {
                            const teclaPresionada = event.key;
                            const letrasPermitidas = /^[a-zA-Z]+$/;

                            if (!teclaPresionada.match(letrasPermitidas)) {
                                event.preventDefault();
                            }
                        });
                    </script>
            </div>
        </div>

        <!--rut del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="" class="form-label">Rut capacitado</label>
                <input type="text" name="rut_cap" class="form-control" placeholder="Ingrese Rut del capacitado*" aria-label="Rut capacitado">
                <span id="maximo_caracteres" class="form-text">Debe tener 9 caracteres.</span>
            </div>
        </div>

        <!--nombre y apellidos capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="" class="form-label">Nombre capacitado</label>
                <input type="text" name="nombre_cap" class="form-control" placeholder="Ingrese nombre del capacitado*"
                    aria-label="Nombre capacitado">
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Apellidos capacitado</label>
                <input type="text" name="apellidos_cap" class="form-control" placeholder="Ingrese Apellidos del capacitado*"
                    aria-label="Apellido paterno capacitado">
            </div>
        </div>

            <!--cargo del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3 "><label for="" class="form-label">Rol capacitado</label>
                <input type="text" name="rol_cap" class="form-control" placeholder="Ingrese Cargo del capacitado*" aria-label="Cargo capacitado">
            </div>
        </div>

        <!--multiple document upload-->
        <div class="col-md-3 mb-3 p-2 border-2">
            <label for="formFileMultiple" class="form-label">Documento de la capacitación</label>
            <input class="form-control" type="file" name="documentos" id="formFileMultiple" multiple>
            <br>
            <button class="btn btn-success" type="submit">Subir Documentos</button>
            {{-- <a href="personalmantenimiento/listadocapacitaciones" class="btn btn-success" type="submit">Subir documentos</a> --}}
        </div>
        </form>



</body>

</html>


