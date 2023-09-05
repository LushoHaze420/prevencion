<!DOCTYPE html> <!--ESTA VISTA PERTENECE SOLO A ADMINISTRADOR-->
<html>
    <head>
        <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">

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
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

        {{-- validacion sweetalert2 --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!--personalizado-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/nuevoUsuario.css')}}">
        @vite(['resources/js/nuevoUsuario/valRutNU.js',
        'resources/js/nuevoUsuario/valRutNU2.js',
        'resources/js/nuevoUsuario/valNomNU.js',
        'resources/js/nuevoUsuario/valApNU.js',
        'resources/js/nuevoUsuario/valBtnCreaNU.js',
        'resources/js/nuevoUsuario/valContra.js',
        'resources/js/nuevoUsuario/valContra2',
        'resources/js/nuevoUsuario/valRepContra.js',
        'resources/js/nuevoUsuario/valRepContra2.js',
        'resources/js/nuevoUsuario/valRepContra3.js',
        'resources/js/nuevoUsuario/valEmailNU.js',
        'resources/js/nuevoUsuario/valExistEmailNUu.js',])
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Registro</h5>
                        <h6>Nuevo Usuario</h6>
                    </div>
                    <div class="card-body">
                        <form id="formStoreNU" method="POST" action="{{route('storeNuevoUsuario')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="input-group form-group"> <!--Rut nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span id="maximo_caracteres_rutNU" class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese Rut" name="rut" id="rutNU" maxlength="9" autofocus="autofocus">
                                <div id="alertaRegistroExistente" class="alert alert-danger" style="display: none;">El registro ya existe.
                                </div>
                            </div>
                            <div class="input-group form-group"><!--nombre nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombres" name="name" id="nombreNU"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="input-group form-group"><!--apellido nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Apellidos" name="last_name" id="apellidoNU"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="input-group form-group"><!--correo nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="emailNU"> <!--crear bd para guardar este registro-->
                                <span id="email-error" class="text-danger"></span>
                            </div>

                            <div class="input-group form-group"> <!-- Contraseña nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span id="maximo_caracteres_contraNU" class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="contraNU" maxlength="9">
                                <span id="contraAlert" ></span> <!-- style="color: red;" Elemento para mostrar la alerta -->
                            </div>

                            <div class="input-group form-group">
                                <!-- Repetir contraseña nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password"
                                    class="form-control"
                                    placeholder="Repetir Contraseña"
                                    name="password_confirmation"
                                    id="repContraNU"
                                    maxlength="9">
                            </div>
                            <div id="repContraAlertContainer"></div> <!-- Contenedor para mostrar la alerta -->

                            <div class="input-group form-group"><!--seleccion rol nuevo usuario -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <select class="form-select " name="role" aria-label="seleccion de rol">
                                    <option selected>Seleccione Rol</option>
                                    {{-- @role('rol_usuario_superadmin') --}}
                                    <option value="Superadmin" name="rol_usuario_superadmin">Superadmin</option> <!--solo el superadmin puede crear otro superadministrador-->
                                    <option value="Admin" name="rol_usuario_admin">Administrador</option> <!--solo el superadmin puede crear administradores-->
                                    {{-- @endrole --}}
                                    <option value="Prev" name="rol_usuario_prevencionista">Prevencionista</option>
                                    <option value="Cons" name="rol_usuario_consultor">Consultor</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn float-right creaNU_btn" type="submit" id="crearUsuarioBtn">Crear</button>
                                <!--<input type="submit" value="Login" class="btn float-right login_btn" href="{route('capacitaciones')}}" >terminar este boton y agregar esto -->
                            </div>
                        </form>
                    <p><a class="btn float-right verNU_btn" href="{{route('listadoUsuarios')}}">Ver usuarios</a></p>
                    <br>
                    <br>
                    <p><a class="btn float-left homeCapacitacionesBtn" href="{{route('homeCapacitaciones')}}">Volver a Cap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

