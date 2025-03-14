<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO PHP</h1>
    <form action="ingresar.php" method="POST">
        <!-- poner el action dentro del form -->
        <h2>nombre</h2>
        <!-- poner nombre en el input  -->
        <input type="text"  name="nombre">
        <h2>apellido</h2>
        <input type="text" name="apellido">
        <h2>correo</h2>
        <input type="email" name="correo">
        <h2>edad</h2>
        <input type="number" name="edad">
        <select name="genero" id="">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select>
    <!-- poner un input submit -->
        <input type="submit" value="enviar">
        
    </form>
</body>
</html>