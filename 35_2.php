<?php

     $string='This is an exmple string';
     $string_shuffled=str_shuffle($string);

     $half = substr($string_shuffled, 0 ,5);
     echo $half.'<br />';

     echo $string_shuffled.'<br/>';

     echo strrev($string);

?>