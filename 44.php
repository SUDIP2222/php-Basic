<?php

    $string='This is a String';

    if(preg_match('/is/',$string)){
        echo 'Found';
    }
    else{
        echo 'Not match Found';
    }

?>