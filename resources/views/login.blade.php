<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <title>Login Andimar/Casino</title>
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--personalizado-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login.css')}}">

    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Inicia Sesión</h3>
                        {{-- <h5>Prevención</h5> --}}
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
                        <form> <!--<form action=route('login') method="post"></form> --> <!--crear bd para activar el action-->
                            <!--@csrf-->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario"> <!--crear bd para guardar este registro-->
                            </div>
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
                                <a class="btn float-right login_btn" value="Login" href="{{route('capacitaciones')}}">Login</a><!--boton de prueba, comparar credenciales ocupando otro metodo-->
                                <!--<input type="submit" value="Login" class="btn float-right login_btn" href="{route('capacitaciones')}}" >terminar este boton y agregar esto -->
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">No tienes cuenta?
                            <a href="#">  Regístrate</a> <!--redireccionar a vista de nuevo registro (no creada)-->
                        </div>
                        <div class="d-flex justify-content-center otc">
                            <a href="#">Olvidaste tu contraseña?</a> <!--redireccionar a vista de olvidaste contrasena (no creada)-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

