<?php

    $num=10500;
    $upper=1000;
    $lower=500;

    if($num>=$lower && $num<=$upper){
         echo 'Ok';
    }
    else{
        echo 'Nmuber must be between '.$lower.' , and '.$upper.'<br />';
    }


    $num2=6;
    $canbe1=2;
    $canbe2=4;

    if(!($num2==$canbe1 )|| !($num2==$canbe2)){
        echo 'Ok .';
    }
    else{
        echo 'Not Ok .';
    }


?>