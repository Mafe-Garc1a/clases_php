<?php
    $nombre=$_REQUEST['nombre' ] ; //captura variables
    $apellido=$_REQUEST[ 'apellido' ];
    $correo=$_REQUEST[ 'correo' ];
    $edad=$_REQUEST[ 'edad' ];
    $genero =$_REQUEST['genero'];
    echo 'nombre' ,$nombre;
    echo 'apellido' ,$apellido;
    echo 'correo' ,$correo;
    echo 'edad' ,$edad;
    echo 'genero' ,$genero;
    if($edad>=18){
        echo "<script>alert('Mayor de edad');</script>";
    }else{
        echo 'ud es menor de edad';
    }
    
?>;

<!-- EJERCICIO
1. Pedir al usuario el nombre del producto , la cantidad , el precio y el 15 % de descuento si va a llevar 5 cantidades
 sino se le hace el 5 % de descuento si lleva 3 cantidades de lo contrario no se le hace descuento  determinar cuanto debe pagar el cliente-


 2.saber si un estudiante debe ir a comite o no, si la competencia de analisis saco mas de 4 en la nota del talller de diagramas de caso de uso y si "aprobo la evaluacion de casos de uso
 debe salir un mensaje, para para comite o pasa la competencia php

 3.para ir a un cine necesita saber a que sala va a ir , 2d rtiene un valor , 3d max , otro valor , y comun otro valor , prguntar cuantas boletas va a comprar , tambien mostrar 3 
 peliculas y que de algunas de llas poner restriccion de edad mayor de 16 años , final saber cuanto debepagar el cliente, tambien teniendo en cuenta que si compra las boletas por internet tiene
 un 5 % de descuento -->

