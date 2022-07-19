<?php
    $first = explode(" ", readline());
    $second = explode(" ", readline());

    $numbers = array_merge($first, $second);
    $numbers = array_unique($numbers);
    sort($numbers);
    $sizeOfNumbers = count($numbers);
    for ($i=0; $i < $sizeOfNumbers; $i++){
        if ($i != $sizeOfNumbers){
            echo "$numbers[$i] ";
        } else {
            echo "$numbers[$i]";
        }
    }
?>