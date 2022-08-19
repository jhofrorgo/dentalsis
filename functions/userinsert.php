<?php
include_once("../config/conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$correo=$_POST['correo'];
$confirmcontrasena=$_POST['confirmcontrasena'];

if ($contrasena == $confirmcontrasena){
$sql="INSERT INTO usuario VALUES(NULL,'$usuario','$contrasena','1','$correo')";
$query= mysqli_query($con,$sql);
}else{echo("Las contraseñas no coinciden, verifique por favor");}

if($query){
    Header("Location: ../alumno.php");
    print '<script language="JavaScript">';
    print 'alert("Su usuario se ha creado con éxito, accede al sistema con tus credenciales");';
    print '</script>';
}else {
}
?>