<?php 
include_once("conexion.php");
$email_recibida=$_GET['email'];
$conexion->query("DELETE FROM crud WHERE  email='$email_recibida'");
header("location:crud.php");
?>