<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container text-center mt-2">
    <h1>FORMULARIO </h1>
    <form action="ingresar4.php" method="POST">
        <div class="row">
            <div class="col">
                  <!-- poner el action dentro del form -->
                <h2>sala que desea ir</h2>
                <!-- poner nombre en el input  -->
                <select name="sala" id="">
                    <option value="3d">3d max</option>
                    <option value="2d">2d</option>
                    <option value="comun">comun</option>
                </select>
                <h2>cantidad</h2>
                <input type="text" name="cantidad">
                <h2>precio</h2>
                <input type="text" name="precio">
                <h2>seleccione pelicula</h2>
                <select name="pelicula" id="">
                    <option value="Moana">Moana</option>
                    <option value="la monja">la monja</option>
                    <option value="orgullo y perjuicio">orgullo y perjuicio</option>
                </select>
                <h2>ingrese su edad</h2>
                <input type="number" name="edad">
                <h2> esta comprando la boleta virtual?
                </h2>
                <select name="opcion" id="">
                    <option value="si">si</option>
                    <option value="no">no</option>
                    
                </select>

            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                <!-- poner un input submit -->
            <button type="submit" class="btn btn-secondary" value="enviar">Submit</button>
    </form>
            </div>
        </div>
        
        
    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>