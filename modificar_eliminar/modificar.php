<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("conexion.php") ; ?>

</head>
<body>
    <?php
    $nombre=$_GET['nombre'];
    $email=$_GET['email'];
    $nota=$_GET['nota'];
    ?>
    <form action="editar.php" method="POST">
        <tr>
        <td><input type="text" name="nombre" value="<?php echo $nombre ?>"></td>
        <td><input type="text" name="email" value="<?php echo $email ?>"></td>
        
        <td><select name="nota" id="">
            <option value="5"><?php if($nota==5){echo 'selected';};   ?> 5</option>
            <option value="4"><?php if($nota==4){echo 'selected';};   ?> 4</option>
            <option value="3"><?php if($nota==3){echo 'selected';};   ?> 3</option>
            <option value="2"><?php if($nota==2){echo 'selected';};   ?> 2</option>
            <option value="1"><?php if($nota==1){echo 'selected';};   ?> 1</option>



        </select></td>

        <input type="submit" value="editar">
        </tr>

    </form>
</body>
</html>