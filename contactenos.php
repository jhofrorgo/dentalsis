<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <title>Formulario de contacto</title>
        <!-- Cargar el CSS de Boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shorcut icon" type="image/jpg" href="img/favicon.png">
    </head>

    <body>
    <?php include("views/menu.php");?>
        <!-- Termina la definición del menú -->
        <main role="main" class="container">
            <div class="row">
                <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
                <div class="col-12">
                    <h1>Gracias por contactarme</h1>
                    <p>Si necesitas ayuda con nuestro sitio deja tu caso y te contactaremos en breve</p>
                </div>
                <div class="col-12">
                    <form method="POST" action="functions/comentsinsert.php">
                        <div class="form-group">
                            <input name="nombre" required type="text" id="nombre"
                                class="form-control" placeholder="Tu nombre">
                        </div>
                        <br>
                        <div class="form-group">
                            <input name="correo" required type="email" id="correo"
                                class="form-control" placeholder="Tu correo electrónico">
                        </div>
                        <br>
                        <div class="form-group">
                            <input name="telefono" required type="number" id="telefono"
                                class="form-control" placeholder="Tu Teléfono">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea required placeholder="Escribe tu mensaje"
                                class="form-control" name="mensaje" id="mensaje"
                                cols="30" rows="5"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn-success btn" type="submit" >
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>