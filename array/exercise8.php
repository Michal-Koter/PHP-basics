<?php
    $numbers = explode(" ", readline());
    $position = readline();
    if ($position >= 0 && $position <= count($numbers)){
        $end = array_splice($numbers, $position);
        $numbers[$position] = "$";
        $result = array_merge($numbers, $end);

        foreach ($result as $out){
            echo "$out ";
        }
    } else {
        echo "Something goes wrong";
    }
?>