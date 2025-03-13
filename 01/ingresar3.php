<?php
     $notaTaller=$_REQUEST['notaTaller' ] ; //captura variables
     $examen=$_REQUEST[ 'examen' ];
    echo 'NOTA TALLER :' , $notaTaller ,('<br>');
    echo 'NOTA EXAMEN :' ,$examen , ('<br>');
    
    if($notaTaller>=4 && $examen>=3){
        
            echo 'aprobro la competencia php';
        
    }else{
        echo'para comite';
    }
?>;