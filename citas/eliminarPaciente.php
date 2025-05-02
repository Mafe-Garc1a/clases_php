<?php     
include_once("conexion.php");

$documento_rcb=$_GET['documento'];
$conexion->query("DELETE  FROM paciente WHERE documento='$documento_rcb'");

header("location:consultaPaciente.php");

?>