<?php
        include_once('conexionbd.php');
        $documento=$_POST['documento'];
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $conexion->query("INSERT INTO cliente(documento,nombre,correo,direccion, telefono) values ('$documento' , '$nombre','$correo','$direccion','$telefono')");


?>