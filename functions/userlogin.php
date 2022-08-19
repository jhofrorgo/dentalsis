<?php

include("../config/conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql="SELECT COUNT(*) FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";
$query=mysqli_query($con,$sql);

    if($query >= 1){
        Header("Location: ../index.php");
    }else{echo("Credenciales invalidas");}
?>