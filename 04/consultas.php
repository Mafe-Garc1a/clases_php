<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    include_once('conexion.php');
?>
</head>
<body>
  <table class="text-center">
    <tr>
        <td>
            <h1>Listado personas</h1>
            <form action="">
                <div>
                    <input type="text" name="buscar" placeholder="buscar Persona por nombre">
                </div><br>
                <button type="submit" class="btn btn-primary" name="button"><strong>buscar</strong></button>
            
            </form>
        </td>
    </tr>
  </table>
  <a href="ingresar_persona"><button>insertar</button></a>
  <table  class="table">
    <tr>
        <td><strong>nombre</strong></td>
        <td><strong>email</strong></td>
        <td>nota</td>
        <td>fecha</td>
    </tr>
    <?php
        if(!empty($_POST['buscar'])){
            $buscar_consulta=($_POST['buscar']);
            $consulta=$conexion->query("SELECT * FROM persona WHERE nombre LIKE '%$buscar_consulta%'" );

        }else{
            $consulta=$conexion->query("SELECT * FROM persona");

        };
        while($row=$consulta->fetch_array()){
            $correo=$row['correo'];
            ?>
            <tr>
                <td><?php echo $row['nombre'];   ?></td>
                <td><?php echo $row['documento'];   ?></td>
                <td><?php echo $correo;   ?></td>
                <td><?php echo $row['edad'];   ?></td>
                <td><?php echo $row['genero'];   ?></td>
            </tr>
       <?php }; ?>
        
  </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>