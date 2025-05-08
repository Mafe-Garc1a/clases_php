<?php 
include_once("conexion.php");

$nit=$_POST['nit'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$pais=$_POST['pais'];
$conexion->query("UPDATE eps set nombre='$nombre' , correo='$correo' , telefono='$telefono' , pais='$pais' WHERE nit='$nit' ");
header("location:consultaEps.php");
?>