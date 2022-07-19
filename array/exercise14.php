<?php
    $index = explode(" ", readline());
    $value = explode(" ", readline());
    $numbers = range($value[0], $value[1]);
    $result = array($index[0] => $numbers[0]);
    for ($i=1; $i < (int)$index[1]-$index[0]+1; $i++){
        $result[] = $numbers[$i];
    }
    print_r($result);
?>