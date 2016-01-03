<?php

    $name='sudip';
    $age=16;

    if(strtolower($name)==='sudip'){
        if($age>=21){
            echo 'you\'re over 21';
            if(1===1){
                 echo 'Yes , 1 is equal to 1';
            }
        }
        else{
            echo 'Not over 21';
        }
    }
    else{
        echo 'You \'re not Alex';
    }

?>