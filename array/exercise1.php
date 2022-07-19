<?php
    $numbers = range(200,250);
    for ($i=0; $i < 50; $i+=4){
        echo "$numbers[$i]";
        if ($numbers[$i] != 248){
            echo ",";
        }
    }
?>