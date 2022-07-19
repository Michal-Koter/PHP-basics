<?php
    $T = readline();
    $P = explode(" ", readline());
    $K = readline();
    $token = strtok($T, " ");
    while ($token != false){
        echo $token . " ";
        if ($token == $P[0] && $displayed == false){
            echo $K . " ";
            $displayed = true;
        }
        $token = strtok(" ");
    }
?>