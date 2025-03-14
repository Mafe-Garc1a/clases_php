<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARANJAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="text-center">TIENDA DE NARANJAS</h1>
    <!-- abre php  -->
     <?php
        if(empty($_REQUEST)){
     ?>
     <dv class="container">
        <form action="" method="POST">
        <label for="num">¿cuantos clientes hay?</label>
        <input type="text" name="num">
        <input type="submit" name="submit" value="enviar">

     </form>
     </dv>
     
     <?php
        }elseif(isset($_REQUEST['num'])){
     ?>
     <form action="" method="post">
            <?php
            $num=$_REQUEST['num'];
            for($i=0;$i<$num;$i++){
                ?>
                ingrese la cantidad de kilos del cliente<?php 
                echo ''.$i+1?>
                <input type="number" name="cantdad[]" value="">
               
                <br>
                <?php
            };
            
            ?>
             <input type="submit" name="submit" value="enviar">
     </form>
     <?php
        }else{
            $totalCompras=0;
            $precio=1000;
            $cantidades=$_REQUEST['cantidad'];
            foreach($cantidades as $cantidad){
                echo "<p> cantidad : $cantidad</p>";
                if($cantidad>10){
                    $total=$precio*$cantidad;
                    $totalCompras=$totalCompras+$total;
                    echo"tiene descuento";
                }else{
                    echo "no tiene descuento";
                };
            };
        };
     ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>