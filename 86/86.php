<?php

    $filename_rename = 'filetorename.txt';
    $rand = rand(10000,99999);
    if(rename($filename_rename, $rand.'txt')){
        echo 'File '.$filename_rename.' has been renamed to <strong>'.$rand.'.txt</strong>';
    }else{
        echo 'Error renaming.';
    }

?>