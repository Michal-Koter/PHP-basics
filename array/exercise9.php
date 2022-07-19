<?php
    $numbers = explode(",", readline());
    $sizeOfNumbers = count($numbers);
    $average = array_sum($numbers)/$sizeOfNumbers;
    printf("%.2f\n", $average);
    sort($numbers);
    $smallest = array();
    $position = 0;
    for ($i=0; $i < $sizeOfNumbers; $i++){
        if ($smallest[$position-1] != $numbers[$i]){
            $smallest[$position] = $numbers[$i];
            $position++;
        }
        if ($position == 5){
            break;
        }
    }
    for ($i=0; $i<5; $i++){
        if($i!=4){
            echo "$smallest[$i] ";
        } else {
            echo $smallest[$i];
        }
    }

    rsort($numbers);
    $biggest = array();
    $position = 0;
    for ($i=0; $i < $sizeOfNumbers; $i++){
        if ($biggest[$position-1] != $numbers[$i]){
            $biggest[$position] = $numbers[$i];
            $position++;
        }
        if ($position == 5){
            echo "\n";
            break;
        }
    }
    sort($biggest);
    for ($i=0; $i<5; $i++){
        if($i!=4){
            echo "$biggest[$i] ";
        } else {
            echo $biggest[$i];
        }
    }
?>