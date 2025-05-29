<?php
include_once("conexion.php");
$nombre_usuario=$_POST['nombre_usuario'];
$id_rol=$_POST['id_rol'];
$pass_hash=$_POST['pass_hash'];

$conexion->query("INSERT INTO usuarios (nombre_usuario,pass_hash,id_rol) values('$nombre_usuario',SHA1('$pass_hash'),'$id_rol')");
header("location:crud.php");
?>