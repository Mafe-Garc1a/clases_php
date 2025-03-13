<?php 
   $nombreProducto=$_REQUEST['nombreProducto' ] ; //captura variables
   $cantidad=$_REQUEST[ 'cantidad' ];
   $precio=$_REQUEST[ 'precio' ];
    echo'NOMBRE PRODUCTO   ' , $nombreProducto , '<br>';
    echo'CANTIDAD DESEADA   ' , $cantidad , '<br>';
    $valor_T=$cantidad*$precio;
    if($cantidad>=5){
        $descuento=($valor_T*15)/100;
        $Total=$valor_T-$descuento;
        echo 'TOTAL PAGAR :   ' , $Total ,'<br>';
    }else{
        if($cantidad>=3 && $cantidad<5){
            $descuento=($valor_T*5)/100;
            $Total=$valor_T-$descuento;
            echo 'TOTAL PAGAR :   ' , $Total ,'<br>';
        }else{
            $Total=$valor_T;
             echo 'TOTAL PAGAR :  ' , $Total ,'<br>';
        }
    }
   
?>;