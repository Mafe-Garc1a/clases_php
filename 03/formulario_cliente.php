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
    <nav>
        
    </nav>
    <div class="container text-center mt-2">
    <h1>FORMULARIO </h1>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                  <!-- poner el action dentro del form -->
        <h2>documento</h2>
        <!-- poner nombre en el input  -->
        <input type="text"  name="documento">
        <h2>nombre</h2>
        <input type="text" name="nombre">
        <h2>correo</h2>
        <input type="email" name="correo">
        <h2>edad</h2>
        <input type="number" name="edad">
        <h2>genero</h2>
        <input type="text" name="genero">
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