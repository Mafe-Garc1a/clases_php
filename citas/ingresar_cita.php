<?php  
include_once("conexion.php");

$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$medico=$_POST['medico'];
$epsP=$_POST['epsP'];
$categoria=$_POST['categoria'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

$conexion->query("INSERT INTO paciente(documento,nombre,medico,epsP,categoria,correo,telefono) 
values('$documento','$nombre','$medico','$epsP','$categoria','$correo','$telefono')");
header("location:crud.php");
?>;
