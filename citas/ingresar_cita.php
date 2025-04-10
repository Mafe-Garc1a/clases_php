<?php  
include_once("conexion.php");

$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

$conexion->query("INSERT INTO paciente(documento,nombre,correo,telefono) 
values('$documento','$nombre','$correo','$telefono')");
header("location:crud.php");
?>;
