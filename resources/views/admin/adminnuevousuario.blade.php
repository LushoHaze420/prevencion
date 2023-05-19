<!DOCTYPE html> <!--SACAR ESTA VISTA DE LA CARPETA AUTH, ESTA VISTA PERTENECE SOLO A ADMINISTRADOR-->
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <title>Registro Nuevo Usuario Prevención/Andimar</title>
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- validacion ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--personalizado-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/nuevoUsuario.css')}}">
        @vite(['resources/js/nuevoUsuario/valRutNU.js','resources/js/nuevoUsuario/valRutNU2.js','resources/js/nuevoUsuario/valNomNU.js','resources/js/nuevoUsuario/valApNU.js', 'resources/js/nuevoUsuario/valBtnCreaNU.js'])
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Registro</h5>
                        <h6>Nuevo Usuario</h6>
                        <div class="d-flex justify-content-end social_icon">
                        <a href="https://web.facebook.com/NuevaAndimarVIP?_rdc=1&_rdr">
                            <span><i class="fab fa-facebook-square"></i></span></a>
                        <a href="https://www.instagram.com/andimarvip/">
                            <span><i class="fab fa-instagram"></i></span></a>
                        <a href="https://www.linkedin.com/company/nueva-andimar-vip/">
                            <span><i class="fab fa-linkedin"></i></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('storeAdminNuevoUsuario')}}" method="POST" enctype="multipart/form-data"> <!--crear bd para activar el action-->
                            @csrf
                            <div class="input-group form-group"> <!--Rut nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span id="maximo_caracteres_rutNU" class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese Rut" name="rut_NU" id="rutNU" maxlength="9"> <!--crear bd para guardar este registro-->
                                <div id="alertaRegistroExistente" class="alert alert-danger" style="display: none;">El registro ya existe.
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $('#rut_NU').on('input', function() {
                                            var rutNU = $(this).val();

                                            $.ajax({
                                                url: '/verificar-registro',
                                                method: 'POST',
                                                data: { rut_NU: rutNU },
                                                success: function(response) {
                                                    if (response.exists) {
                                                        $('#maximo_caracteres_rutNU').show();
                                                    } else {
                                                        $('#maximo_caracteres_rutNU').hide();
                                                    }
                                                }
                                            });
                                        });
                                    });
                                </script>

                            </div>
                            <div class="input-group form-group"><!--nombre nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombres" name="nombre_NU" id="nombreNU"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="input-group form-group"><!--apellido nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Apellidos" name="apellido_NU" id="apellidoNU"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="input-group form-group"><!--correo nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email_NU" id="emailNU"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="input-group form-group"><!--contraseña nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena_NU" id="contraNU"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="input-group form-group"><!--repetir contraseña nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Repetir Contraseña" name="repetirContrasena_NU" id="repContraNU"> <!--crear bd para guardar este registro-->
                            </div>

                            <div class="input-group form-group"><!--seleccion rol nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <select class="form-select " name="rol_NU" aria-label="seleccion de rol">
                                    <option selected>Seleccione Rol</option>
                                    {{-- <option value="Admin" name="rol_usuario_admin">Administrador</option> REVISAR CON ALFRED--}}
                                    <option value="Prev" name="rol_usuario_prevencionista">Prevencionista</option>
                                    <option value="Cons" name="rol_usuario_consultor">Consultor</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn float-right creaNU_btn" type="submit">Crear</button>
                                <!--<input type="submit" value="Login" class="btn float-right login_btn" href="{route('capacitaciones')}}" >terminar este boton y agregar esto -->
                            </div>
                        </form>
                    <p><a class="btn float-right verNU_btn" href="{{route('adminUsuariosCreados')}}">Ver usuarios</a></p>
                    <br>
                    <br>
                    <p><a class="btn float-left volveracap_btn" href="{{route('adminCap')}}">Volver a Cap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

