<?php     
include_once("conexion.php");

$nit_rcb=$_GET['nit'];
$conexion->query("DELETE  FROM eps WHERE nit='$nit_rcb'");

header("location:consultaEps.php");

?>