<?php
    $text = readline();
    $first = substr($text, 0 ,2);
    $second = substr($text, 2, 2);
    $third = substr($text, 4, 2);
    printf("%02d:%02d:%02d", $first, $second, $third);
?>