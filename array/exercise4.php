<?php
    $numbers = explode(" ", readline());
    $searchingNum = readline();
    if (in_array($searchingNum, $numbers)){
        echo "Number is in array";
    } else {
        echo "Number is not in array";
    }
?>