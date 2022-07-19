<?php
    $arrayA = explode(" ", readline());
    $arrayB = explode(" ", readline());

    foreach ($arrayB as $num){
        if (!in_array($num, $arrayA)){
            echo "NO";
            exit;
        }
    }
    echo "YES";
?>