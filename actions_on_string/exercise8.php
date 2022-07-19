<?php
    $textA = str_split(strtolower(readline()));
    $textB = str_split(strtolower(readline()));
    for ($i =0 ; $i<sizeof($textA);$i++){
        if ($textA[$i] != $textB[$i]){
            echo $i;
            exit;
        }
    }
    echo "The strings are equal";
?>