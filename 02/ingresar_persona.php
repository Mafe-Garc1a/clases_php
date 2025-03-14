<?php
//se trae un archivo
include_once('conexion.php');
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$conexion->query( "INSERT INTO persona(documento,nombre,edad,correo,genero) values ('$documento' , '$nombre','$edad','$correo','$genero') ");


?>


