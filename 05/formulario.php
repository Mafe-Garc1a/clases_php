<!-- realizar un ejercicio donde tenga las 3 opciones , ingresar , consulta individual y consulta general  --
  tablas . pesqueria 
  productos->codigo , nombre , descripcion , cantidad , precio   
  clientes->documento , nombre , apellido , direccion  
factura->codigo producto , nombre producto , cantidad(convertir de kilos a libras), precio pcto , total(multiplicando cantidad *precio) y hacer descuento del 5% si lleva mas de $120.000 -->


<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    //se trae un archivo
    include_once('conexionbd.php');
    
    ?>
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">INGRESAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">cliente</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">factura</a>
       
        
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="" method="post">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="buscar">
        <button class="btn btn-outline-success" type="submit" name="button" >Search</button>

      </form>
    </div>
  </div>
</nav>



<table class="table table-hover text-center">
    <h1 class="text-center">clientes</h1>
    <tr>
        <th>documento</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>direccion</th>
    </tr>
<?php 
        if(!empty($_POST['buscar'])){
            $buscar_consulta=($_POST['buscar']);
            $consulta=$conexionbd->query("SELECT * FROM cliente WHERE nombre LIKE '%$buscar_consulta%'  ");
        }else{
            $consulta=$conexionbd->query("SELECT *FROM cliente");
        };
        while($row=$consulta->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['documento']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
            </tr>
<?php }; ?>
</table>



<table class="table table-hover text-center">
    <h1 class="text-center">productos</h1>
    <tr>
        <th>codigo</th>
        <th>nombre Pcto</th>
        <th>descripcion</th>
        <th>cantidad</th>
        <th>precio</th>
    </tr>
    <?php
        if(!empty($_POST['buscar'])){
            $buscar=$_POST['buscar'];
            $consulta=$conexionbd->query("SELECT * FROM producto WHERE nombre LIKE '%$buscar%' " );
        }else{
            $consulta=$conexionbd->query("SELECT * FROM producto");
        };
        while($row=$consulta->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo'];  ?></td>
                <td><?php echo $row['nombre'];  ?></td>
                <td><?php echo $row['descripcion'];  ?></td>
                <td><?php echo $row['cantidad'];  ?></td>
                <td><?php echo $row['precio'];  ?></td>
            </tr>
    <?php };  ?>
</table>
















<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel3">Ingresar factura</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center mb-3">FORMULARIO FACTURA</h3>
                    <form action="ingresar_producto.php" method="POST" class="text-center">
                        <h5 class=" fw-semibold">Codigo</h5>
                            <SELEct>
                                <?php 
                                $consulta=$conexionbd->query("SELECT * FROM producto");
                                while ($row=$consulta->fetch_array()){
                                echo '<option value="'.$row['codigo'].'" selected>'.$row['codigo'].'</option>';
                                };
                                ?>
                            </SELEct>
                        <h5 class=" fw-semibold">Nombre</h5>
                            <select>
                                <?php 
                                $consulta=$conexionbd->query("SELECT * FROM producto");
                                while ($row=$consulta->fetch_array()){

                                    echo '<option value="'.$row['nombre'].'" selected>'.$row['nombre'].'</option>';
                                };
                                ?>
                            </select>
                        <h5 class=" fw-semibold">Descripción</h5>
                            <select name="" id="">
                                <?php
                                $consulta=$conexionbd->query("SELECT * FROM producto");
                                while ($row=$consulta->fetch_array()){
                                    echo '<option value="'.$row['descripcion'].'"selected>'.$row['descripcion'].'</option>';
                                };
                                ?>
                            </select>
                        <h5 class=" fw-semibold">Cantidad</h5>
                                <select name="" id="">
                                    <?php
                                    $consulta=$conexionbd->query("SELECT * FROM producto");
                                    while($row=$consulta->fetch_array()){
                                        echo '<option value="'.$row['cantidad'].'" selected>'.$row['cantidad'].'</option>';
                                    };
                                    ?>
                                </select>
                        <h5 class=" fw-semibold">precio</h5>
                            <select>
                                <?php
                                $consulta=$conexionbd->query("SELECT * FROM producto");
                                while($row=$consulta->fetch_array()){
                                    echo '<option value="'.$row['precio'].'" selected'.$row['precio'].'</option>';
                                };

                                ?>
                            </select>
                            <div class="row">
                                <button type="submit" class="btn btn-primary mt-3"  data-bs-dismiss="modal">Ingresar</button>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>













    
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel2">Ingresar producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center mb-3">FORMULARIO PRODUCTO</h3>
                    <form action="ingresar_producto.php" method="POST" class="text-center">
                        <h5 class=" fw-semibold">Codigo</h5>
                            <input type="text" name="codigo"><br>
                        <h5 class=" fw-semibold">Nombre</h5>
                            <input type="text" name="nombre"><br>
                        <h5 class=" fw-semibold">Descripción</h5>
                            <textarea name="descripcion" id=""></textarea><br>
                        <h5 class=" fw-semibold">Cantidad</h5>
                            <input type="text" name="cantidad"><br>
                        <h5 class=" fw-semibold">precio</h5>
                            <input type="text" name="precio"><br>
                        <button type="submit" class="btn btn-primary mt-3"  data-bs-dismiss="modal">Ingresar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>



<!-- Modal1 -->
<div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">Ingresar cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center mb-3">FORMULARIO </h3>
                    <form action="ingresar.php" method="POST">
        <div class="row">
            <div class="col">
                <!-- poner el action dentro del form -->
        <h2>documento</h2>
        <!-- poner nombre en el input  -->
        <input type="text"  name="documento">
        <h2>nombre</h2>
        <input type="text" name="nombre">
        <h2>apellido</h2>
        <input type="text" name="apellido">
        <h2>direccion</h2>
        <input type="text" name="direccion">
        
        <div class="row">
            <div class="col">
            <button type="submit"  class="btn btn-success mt-2" value="enviar">enviar</button>
            </div>
        </div>
    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>
</html>