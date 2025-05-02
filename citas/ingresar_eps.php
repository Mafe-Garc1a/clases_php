<?php 
include_once("conexion.php");
$nit=$_POST['nit'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$pais=$_POST['pais'];
$conexion->query("INSERT INTO eps(nit,nombre,correo,telefono,pais) values('$nit' , '$nombre' , '$correo' , '$telefono' , '$pais')");
header("location:crud.php");

?>