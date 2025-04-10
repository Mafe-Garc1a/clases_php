<?php
include_once("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$nota=$_POST['nota'];

$conexion->query("INSERT INTO alumnos(nombre,email,nota) values ('$nombre','$email','$nota')");
header("location:crud.php");

?>