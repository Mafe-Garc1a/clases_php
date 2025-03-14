<?php
//se trae un archivo
include_once('conexionbd.php');
$serial=$_POST['serial'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$laboratorio=$_POST['laboratorio'];
$proveedor=$_POST['proveedor'];
$conexion->query( "INSERT INTO farmacia(serial,nombre,cantidad,precio,laboratorio,proveedor) values ('$serial' , '$nombre','$cantidad','$precio','$laboratorio','$proveedor')");


?>
