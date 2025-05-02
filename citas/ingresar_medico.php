<?php
include_once("conexion.php");
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$n_licencia=$_POST['n_licencia'];
$especialidad=$_POST['especialidad'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$conexion->query("INSERT INTO medico(documento,nombre,n_licencia,especialidad,correo,telefono) values ('$documento','$nombre','$n_licencia','$especialidad','$correo','$telefono')");
header("location:crud.php");

?>