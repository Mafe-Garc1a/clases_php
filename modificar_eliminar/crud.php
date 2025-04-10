<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("conexion.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
</head>
<body>
<h1>estudiantes</h1>

    <DIV class="CONTAINER text-center">
    <form action="" method="post">
    <input type="text" name="buscar" value="buscar">
    <button type="submit" class="btn btn-success"> buscar</button>
    </form>
    
    </DIV>
    
<table class ="table table-hover text-center">
    <tr>
        <th>nombre</th>
        <th>email</th>
        <th>nota</th>
    </tr>
<?php

    if(!empty($_POST['buscar'])){
        $buscar=$_POST['buscar'];
        $consulta=$conexion->query("SELECT * FROM alumnos WHERE nombre LIKE '%$buscar%'  ");
    }else {
        $consulta=$conexion->query("SELECT * FROM alumnos   ");
    };
    while($row=$consulta->fetch_array()){
        ?>
        <tr>
            <td> <?php echo $row['nombre'];  ?></td>
            <td> <?php echo $row['email'];  ?></td>
            <td> <?php echo $row['nota'];  ?></td>
            <td><button class="btn btn-dark"><a href="modificar.php?
            nombre=<?php echo $row["nombre"]?>&
            email=<?php echo $row['email']?>&
            nota=<?php echo $row['nota']?>" title="editar">editar</a></button></td>
            <td>
                <a href="eliminar.php?email=<?php echo $row['email'];   ?>" class="btn btn-danger" title="elimnar">
                    <i class="icn-edit">eliminar</i>



                </a>
                
            </td>
        </tr>
    <?php }; ?>



   
</table>
<a href="formulario.php"><button class="btn btn-success">ingresar mas estudiantes</button></a>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>