<?php
    $vowels = preg_replace("/[^aeiouAEIOU]/","", readline());
    $num = readline();
    $size = strlen($vowels);
    for($i=$size-$num;$i<$size;$i++){
        echo $vowels[$i];
    }
?>