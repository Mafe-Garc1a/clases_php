<?php
include_once("conexion.php");
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$conexion->query("UPDATE paciente  set nombre='$nombre' , correo='$correo' , telefono='$telefono' WHERE documento='$documento'");
header("location:consultaEps.php");


?>