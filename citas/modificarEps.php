<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modificar eps</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <?php  include_once("conexion.php"); ?>
</head>
<body class="mua">
    <?php
    $nit=$_GET['nit'];
    $nombre=$_GET['nombre'];
    $correo=$_GET['correo'];
    $telefono=$_GET['telefono'];
    $pais=$_GET['pais'];
    ?>

    <div class="container text-center mt-4">
        <h1>modifica eps</h1>
        <form action="editarEps.php" method="post">
            <table class="text-center table table-hover">
            <tr>
                <td><h3>nit :</h3></td>
                <td><input type="text" name='nit' value="<?php echo $nit;?>"></td>
                <td ><h3>nombre :</h3></td>
                <td><input type="text" name='nombre' value="<?php echo $nombre;?>"></td>
                
            </tr>
            <tr>
                <td ><h3>correo :</h3></td>
                <td><input type="text" name='correo' value="<?php echo $correo;?>"></td>
                <td ><h3>telefono :</h3></td>
                <td><input type="text" name='telefono' value="<?php echo $telefono;?>"></td>
                <td ><h3>pais :</h3></td>
                <td><input type="text" name='pais' value="<?php echo $pais;?>"></td>
            </tr>
            </table>
            <button type="submit" class="btn btn-primary">confirmar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>