<?php 
    include("config/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <LINK REL=StyleSheet HREF="style/style.css" TYPE="text/css" MEDIA=screen>
    <link rel="shorcut icon" type="image/jpg" href="img/favicon.png">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                        <div class="col-xs-6">
                                <a href="#" class="inactive" id="">Bienvenido de nuevo, ¡accede con tu usuario o registrate!</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Regístrate ahora</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="functions/userlogin.php" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Usuario" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="contrasena" id="contrasena" tabindex="2" class="form-control" placeholder="Contraseña" required>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Recordarme</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="functions/userinsert.php" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Usuario" value=""  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="correo" id="correo" tabindex="1" class="form-control" placeholder="Correo electrónico" value=""  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="contrasena" id="contrasena" tabindex="2" class="form-control" placeholder="Contraseña"  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirmcontrasena" id="confirmcontrasena" tabindex="2" class="form-control" placeholder="Confirmar contraseña"  required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>