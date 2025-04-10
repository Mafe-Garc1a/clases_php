<?php
include_once("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$nota=$_POST['nota'];

$conexion->query("UPDATE alumnos  set nombre='$nombre', nota='$nota' WHERE email='$email'");
header("location:crud.php");

?>