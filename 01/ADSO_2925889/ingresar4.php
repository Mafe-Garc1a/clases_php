<?php
    $sala=$_REQUEST['sala' ] ; //captura variables
    $cantidad=$_REQUEST[ 'cantidad' ];
    
    $pelicula=$_REQUEST[ 'pelicula' ];
    $edad =$_REQUEST['edad'];
    $opcion=$_REQUEST['opcion'];

    echo 'sala  ' ,$sala , '<br>';
    echo 'cantidad  ' ,$cantidad , '<br>';
    echo 'edad  ' ,$edad , '<br>';
    echo 'pelicula  ' ,$pelicula , '<br>';
    if($sala=='3d'){
        $valor_p=$cantidad*7000;
        echo 'precio  ' ,$valor_p, '<br>';
    }else{
        if($sala=='2d'){
            $valor_p=$cantidad*13000;
            echo 'precio  ' ,$valor_p , '<br>';
        }else{
            if($sala=='comun'){
                $valor_p=$cantidad*9000;
                echo 'precio  ' ,$valor_p , '<br>';
            }
        }
    }
    
    if($opcion=='si'){
        $descuento=($valor_p*5)/100;
        $total_pagar=$valor_p-$descuento;
        echo "TOTAL PAGAR :" , $total_pagar, '<br>';
    }else{
        echo'TOTAL PAGAR : ' , $valor_p , '<br>';
    }
    if($pelicula=='la monja' && $edad<=16){
        echo "<script>alert('NO TIENE EDAD SUFICIENTE PARA VER ESTA FUNCION');
        
        
        </script>";
    }
    
    
?>;