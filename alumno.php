<?php 
    include("config/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shorcut icon" type="image/jpg" href="img/favicon.png">
    </head>
    <body>
    <?php include("views/menu.php");?>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <center><h1>Nuevo Alumno</h1></center>
                                <form action="functions/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="tipodocumento" placeholder="Tipo documento" required>
                                    <input type="text" class="form-control mb-3" name="documento" placeholder="Documento de identidad" required>
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" required>
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" required>
                                    <input type="date" class="form-control mb-3" name="fechanacimiento" placeholder="Fecha de nacimiento" required>
                                    <input type="text" class="form-control mb-3" name="grado" placeholder="Curso" required>
                                    <input type="text" class="form-control mb-3" name="acudiente" placeholder="Acudiente" required>
                                    <input type="text" class="form-control mb-3" name="telacu" placeholder="Teléfono acudiente" required>
                                    
                                    <center><input type="submit" class="btn btn-success"></center>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Curso</th>
                                        <th>Nombre Acudiente</th>
                                        <th>Teléfono</th>
                                        <th>Acciones</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['documento']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['grado']?></th>
                                                <th><?php  echo $row['acudiente']?></th>
                                                <th><?php  echo $row['telacu']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="functions/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <?php include("views/footer.php"); ?>
    </body>
</html>