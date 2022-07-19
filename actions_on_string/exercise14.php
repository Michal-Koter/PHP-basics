<?php
    $text = readline();
    $find = readline();
    $token = strtok($text, " ");
    while($token !== false){
        if (strcasecmp($token, $find)){
            echo $token . " ";
        }
        $token = strtok(" ");
    }
?>