<?php
include("../config/conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$fecha=date('Y-M-D');


$sql="INSERT INTO contactenos VALUES(NULL,'$nombre','$correo','$telefono','$mensaje','$fecha')";
$query= mysqli_query($con,$sql);


if($query){
   //echo("<p style:'color:green';>Gracias por sus comentarios, en breve nos pondremos en contacto con usted</p>");
   print '<script language="JavaScript">';
   print 'alert("Gracias por tus comentarios, en breve nos pondremos en contacto contigo");';
   print '</script>';
   require('../contactenos.php');
}else {
}
?>