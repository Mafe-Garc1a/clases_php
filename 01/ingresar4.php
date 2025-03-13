<?php
    $sala=$_REQUEST['sala' ] ; //captura variables
    $cantidad=$_REQUEST[ 'cantidad' ];
    $precio=$_REQUEST[ 'precio' ];
    $pelicula=$_REQUEST[ 'pelicula' ];
    $edad =$_REQUEST['edad'];
    $opcion=$_REQUEST['opcion'];

    echo 'sala  ' ,$sala , '<br>';
    echo 'cantidad  ' ,$cantidad , '<br>';
    echo 'precio  ' ,$precio , '<br>';
    echo 'edad  ' ,$edad , '<br>';
    echo 'pelicula  ' ,$pelicula , '<br>';
    $valor_p=$cantidad*$precio;
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