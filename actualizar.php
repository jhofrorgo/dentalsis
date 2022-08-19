<?php 
    include("config/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shorcut icon" type="image/jpg" href="img/favicon.png">
    </head>
    <body>
        <?php include('views/menu.php')?>
                <div class="container mt-5">
                    <form action="functions/update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="tipodocumento" placeholder="Tipo de documento" value="<?php echo $row['tipodocumento']  ?>">
                                <input type="text" class="form-control mb-3" name="documento" placeholder="Documento" value="<?php echo $row['documento']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="fechanacimiento" placeholder="fecha Nacimiento" value="<?php echo $row['fechanacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="grado" placeholder="Grado" value="<?php echo $row['grado']  ?>">
                                <input type="text" class="form-control mb-3" name="acudiente" placeholder="Acudiente" value="<?php echo $row['acudiente']  ?>">
                                <input type="text" class="form-control mb-3" name="telacu" placeholder="Teléfono" value="<?php echo $row['telacu']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>