<?php

    ob_start();
    session_start();
    $current_file = $_SERVER['SCRIPT_NAME']; //specifies the page that you are on now
    $http_referer = $_SERVER['HTTP_REFERER']; //specifies the page we have come from

    function loggedin(){
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }

?>