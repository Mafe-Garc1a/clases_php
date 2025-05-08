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
<div class="container text-center mt-4 p-2">
    <div class="row text-center">
        <div class="col-6 text-center p-4">
            <table class="table table-hover text center">
                <form action="login.php" method="POST">
                    <tr><td> <label for="nombre_usuario">Usuario:</label></td></tr>
                    <tr><td> <input type="text" name="nombre_usuario" required></td></tr>
                    <tr><td><label for="pass_hash">Contraseña:</label></td></tr>
                    <tr><td> <input type="password" name="pass_hash" required></td></tr>
                    <tr><td> <button class="btn btn-primary" type="submit">Iniciar sesión</button></td></tr>
                </form>
            </table>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>