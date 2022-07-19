<?php
    $T = strtolower(readline());
    $K = readline();
    $k = strtolower($K);
    if (strpos($T, $k) != false){
        echo "Word $K is in string";
    } else {
        echo "Word $K is not in string";
    }
?>