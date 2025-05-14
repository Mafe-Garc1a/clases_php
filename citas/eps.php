<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGENDAR CITAS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php include_once("conexion.php");  ?>
  </head>
  <body class="mua">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="crud.php"><strong class="text-primary fs-1">MI EPS</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="cerrar.php"><button class="btn btn-danger">cerrar session</button></a>
    <!-- <div class="collapse navbar-collapse justify-content-end me-4" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal4">ingresarE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div> -->
  </div>
  
</nav>
<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'eps') {
    header("Location: login.html");
    exit();
}
echo "Bienvenido, eps " . $_SESSION['nombre_usuario'];
?>


<DIV class="CONTAINER text-center mt-4 p-2">
        <div class="row">
            <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                ingresa eps---> <i class="bi bi-arrow-right-circle"></i>
            </button>
            </div>
            <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            consulta  eps<i class="bi bi-moon-stars"></i>---->
            </button>
            </div>
            <div class="col">
              <a href="consultaEps.php"> <button type="button" class="btn btn-primary"  >
            modifica cancela eps---->
            </button></a>
          
            </div>
        </div>
</DIV>



<!-- ------------------------------------------------ -->
<!-- modales citas   -->

<!-- Modal 2-->

<!-- modales eps -->
<!-- modal 3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel3">ingresa eps</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <form action="ingresar_eps.php" method="post">
        <table>
          
        </table>
                  <!-- poner el action dentro del form -->
        <h2>nit</h2>
        <!-- poner nombre en el input  -->
        <input type="text"  name="nit">
        <h2>nombre eps</h2>
        <input type="text" name="nombre">
        <h2>correo Eps</h2>
        <input type="email" name="correo">
        <h2>telefono Eps</h2>
        <input type="text" name="telefono">
        <h2>Pais Eps</h2>
        <input type="text" name="pais">
        <div class="row mt-2">
          <div class="col">
            <button type="submit" class="btn btn-primary" value="enviar"> enviar</button>
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-danger" value="enviar">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- Modal 4-->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel4">CONSULTA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
        <h5>ingrese numero nombre eps</h5>
        <form class="d-flex" method="POST">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="buscareps">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          <table class ="table table-hover text-center">
            <tr>
              <th>nit</th>
              <th>nombre eps</th>
              <th>correo</th>
              <th>telefono</th>
              <th>pais</th>
            </tr>
            <?php   
            include_once("conexion.php");
            if(!empty($_POST['buscareps'])){
              $buscareps=$_POST['buscareps'];
              $consultaeps=$conexion->query("SELECT * FROM eps WHERE  nombre  LIKE  '%$buscareps%'");
            }else{
              $consultaeps=$conexion->query("SELECT * FROM eps");
            };
            while($row=$consultaeps->fetch_array()){
              ?>
              <tr>
                <td> <?php echo $row['nit'];  ?></td>
                <td> <?php echo $row['nombre'];  ?></td>
                <td> <?php echo $row['correo'];  ?></td>
                <td> <?php echo $row['telefono'];  ?></td>
                <td> <?php echo $row['pais'];  ?></td>
              </tr>
            <?php }; ?>
          </table>
          <p class="text-danger">recuerda para ver tu consullta vuelve y  da click en el boton consulta cuano esta ventana se cierre </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modales medico -->

<!-- modal 5 -->

<!-- modal 6 -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>