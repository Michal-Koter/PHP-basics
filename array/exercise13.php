<?php
    $numbers = explode(" ", readline());
    $index = explode(" ", readline());

    $index = array_flip($index);
    $numbers = array_diff_key($numbers, $index);
    $last = count($numbers);
    foreach ($numbers as $num){
        echo "$num ";
    }
?>