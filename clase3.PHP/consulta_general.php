<?php
    include_once("conexion.php"); 

    $consulta=$consulta->query("SELECT * FROM persona"); 
    while($row=$consulta->fetch_array()){
        echo 'Documento', $row['documento'], '<br>'; 
        echo 'Nombre', $row['nombre'], '<br>';
        echo 'Edad', $row['edad'], '<br>';
        echo 'Correo', $row['correo'], '<br>';
        echo 'Genero', $row['genero'], '<br>';
        echo "--------------------------------", '<br>'; 
    }
?>