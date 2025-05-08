<?php 
include_once("conexion.php");

$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$n_licencia=$_POST['n_licencia'];
$especialidad=$_POST['especialidad'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

$conexion->query("UPDATE medico set nombre='$nombre' , n_licencia='$n_licencia', especialidad='$especialidad', correo='$correo' , telefono='$telefono'  WHERE documento='$documento' ");
header("location:consultaMedico.php");
?>