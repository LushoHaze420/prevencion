<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <title>Login Andimar/Prevención</title>
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Bootsrap 5 CDN
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">-->

        <!--personalizado-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login.css')}}">
        @vite(['resources/js/login/valUsuario.js', 'resources/js/login/valUsuario2.js','resources/js/login/modalRegistrate.js'])
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Inicia Sesión</h5>
                        <h6>Prevención</h6>
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
                        <form action="" method="POST"></form> --> <!--crear bd para activar el action-->
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" maxlength="9" required> <!--crear bd para guardar este registro-->
                                <div class="invalid-feedback">usuario no registrado</div> <!---revisar estilo de vaidacion-->
                                <span id="maximo_caracteres_valUsuario" class="form-text"></span>
                            </div>
                            {{-- <p class="border border-red-500 rounded-md">* error</p> --}}
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena"> <!--crear bd para guardar este registro-->
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Recuerdame
                            </div>
                            <div class="form-group">
                                <a class="btn float-right login_btn" type="submit" value="Login" href="{{route('adminCap')}}">Login</a><!--boton de prueba, comparar credenciales ocupando otro metodo-->
                                <!--<input type="submit" value="Login" class="btn float-right login_btn" href="{route('capacitaciones')}}" >terminar este boton y agregar esto -->
                            </div>
                        </form>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">No tienes cuenta?
                            <a class="" href="#" id="modalRegistrate">Regístrate</a>
                        </div>
                        <div class="d-flex justify-content-center otc">
                            <a href="{{route('olviContrasena')}}">Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
