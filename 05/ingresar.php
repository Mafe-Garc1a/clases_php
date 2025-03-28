<?php
    include_once("conexionbd.php");
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $conexionbd->query("INSERT INTO cliente(documento,nombre,apellido,direccion) values ('$documento','$nombre','$apellido','$direccion' )");
    header('location:formulario.php'); //para que vuelva al principio
?>