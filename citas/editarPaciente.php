<?php
include_once("conexion.php");
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$medico=$_POST['medico'];
$epsP=$_POST['epsP'];
$categoria=$_POST['categoria'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$conexion->query("UPDATE paciente  set nombre='$nombre' , medico='$medico' , epsP='$epsP' , categoria='$categoria' ,  correo='$correo' , telefono='$telefono' WHERE documento='$documento'");
header("location:consultaPaciente.php");

?>