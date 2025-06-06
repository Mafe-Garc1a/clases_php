<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modifica o elimina tu cita</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="mua">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="crud.php"><button class="btn btn-primary"><---</button></a>
    <a class="navbar-brand" href="crud.php"><strong class="text-primary fs-1">MI EPS</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
    </div>
    </nav>
    <div class="container p-4">
        <h1 class="mb-2">ingrese el numero del documento</h1>
        <form class="d-flex" method="POST">
        
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="buscar">
        <button class="btn btn-outline-success" type="submit">Search</button>
</form>
    </div>
    <div class="container mt-2">
        <table class ="table table-hover text-center">
            <tr>
                <th>documento</th>
                <th>nombre</th>
                <th>doctor</th>
                <th>eps</th>
                <th>categoria</th>
                <th>correo</th>
                <th>telefono</th>
            </tr>
            <?php   
            include_once("conexion.php");
            if(!empty($_POST['buscar'])){
                $buscar=$_POST['buscar'];
                $consulta=$conexion->query("SELECT * FROM paciente WHERE  documento  LIKE  '%$buscar%'");
            }else{
                $consulta=$conexion->query("SELECT * FROM paciente");
            };
            while($row=$consulta->fetch_array()){
            ?>
            <tr>
                <td> <?php echo $row['documento'];  ?></td>
                <td> <?php echo $row['nombre'];  ?></td>
                <td> <?php echo $row['medico'];  ?></td>
                <td> <?php echo $row['epsP'];  ?></td>
                <td> <?php echo $row['categoria'];  ?></td>
                <td> <?php echo $row['correo'];  ?></td>
                <td> <?php echo $row['telefono'];  ?></td>
                <td><a href="modificarPaciente.php?
                documento=<?php echo $row["documento"]?>&
                nombre=<?php echo $row['nombre']?>&
                medico=<?php echo $row['medico']?>&
                epsP=<?php echo $row['epsP']?>&
                categoria=<?php echo $row['categoria']?>&
                correo=<?php echo $row['correo']?>&
                telefono=<?php echo $row['telefono']?>" title="editar"><button class="btn btn-success">editar</button></a></td>
                <td> <a href="eliminarPaciente.php?documento=<?php echo $row['documento'];   ?>" class="btn btn-danger" title="elimnar">
                <i class="icn-edit">eliminar</i></td>
            </tr>
            <?php }; ?>
        </table>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>