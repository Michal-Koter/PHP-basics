<?php
    $numbers = explode(",", readline());
    $new = array_unique($numbers);
    $last = $new[count($new)];
    foreach ($new as $num){
        if ($num != $new[$last]){
            echo "$num ";
        } else {
            echo "$num";
        }
    }
?>