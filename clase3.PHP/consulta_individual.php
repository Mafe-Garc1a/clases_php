<?php
    include_once("conexion.php"); //la juntamos con conexion 

    //capturar documento en el cual necesito atraer los datos 
    $documento=$_POST['documento']; 

    $consulta=$consulta->query("SELECT * FROM persona WHERE 
    documento ='$documento'"); //este documento es de la tabla q estoy trasteando de la base de datos q el documento sea igual al ingresado
    while($row=$consulta->fetch_array()){
        $documento=$row['documento']; 

        echo 'Documento: ', $documento, '<br>';
        echo 'Nombre', $row['nombre'], '<br>';
        echo 'Edad', $row['edad'], '<br>';
        echo 'Correo', $row['correo'], '<br>';
        echo 'Genero', $row['genero'], '<br>';                                                                                                                                                                                                                               
    }
?>