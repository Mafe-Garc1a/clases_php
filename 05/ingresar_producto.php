<?php
    include_once("conexionbd.php");
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];

    $conexionbd->query("INSERT INTO producto(codigo,nombre,descripcion,cantidad,precio) values ('$codigo','$nombre','$descripcion','$cantidad','$precio')");

    header("location:formulario.php");
?>