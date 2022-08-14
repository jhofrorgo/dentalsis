<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$tipodocumento=$_POST['tipodocumento'];
$documento=$_POST['documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fechanacimiento=$_POST['fechanacimiento'];
$grado=$_POST['grado'];
$acudiente=$_POST['acudiente'];
$telacu=$_POST['telacu'];

$sql="UPDATE alumno SET  tipodocumento='$tipodocumento',documento='$documento',nombres='$nombres',apellidos='$apellidos',fechanacimiento='$fechanacimiento',grado='$grado',acudiente='$acudiente',telacu='$telacu' WHERE id=$id";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>