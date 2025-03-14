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
    <?php
        if(empty($_REQUEST)){
    ?>
     <form action="" method="POST">
        <label for="num">¿cuantos clientes hay?</label>
        <input type="text" name="numeroC">
        <input type="submit" name="submit" value="enviar">
        <?php
        }elseif(isset($_REQUEST['numeroC'])){
     ?>
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th># cliente</th>
                    <th>nombre P.</th>
                    <th>cantidad</th>
                    <th>Precio</th>
                    <th>subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $numeroC=$_REQUEST['numeroC'];
                    for($i=0; $i<$numeroC ;$i++){
                        ?>
                        <td><?php echo $i+1?></td>
                </tr>
            </tbody>
             <?php
        

        
           
        }
            ?>?>
        </table>
       

            <button type="submit" class="btn btn-secondary" value="enviar">Submit</button>
    </form>
            </div>
        </div>
        <?php
        }
        ?>
        
        
    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>