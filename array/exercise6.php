<?php
    $num = readline();
    for ($i=0; $i<$num; $i++){
        $text[$i] = explode(" ", readline());
    }
    for ($i=0; $i<$num; $i++) {
        echo max($text[$i]);
        echo "\n";
    }
?>