<?php
include("conexion.php");
$con=conectar();

$tipodocumento=$_POST['tipodocumento'];
$documento=$_POST['documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fechanacimiento=$_POST['fechanacimiento'];
$grado=$_POST['grado'];
$acudiente=$_POST['acudiente'];
$telacu=$_POST['telacu'];


$sql="INSERT INTO alumno VALUES(NULL,'$tipodocumento','$documento','$nombres','$apellidos','$fechanacimiento','$grado','$acudiente','$telacu')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>