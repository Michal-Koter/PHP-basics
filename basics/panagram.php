<?php
    $text = readline();
    $uppercase = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $lowercase = array ("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $lenOfAlphabet = 26;
    for ($i=0; $i < $lenOfAlphabet; $i++){
        $charIs = false;
        for ($j=0; $j < strlen($text); $j++){
            if ($text{$j} == $lowercase{$i} || $text{$j} == $uppercase{$i}){
                $charIs = true;
            } 
            if ($charIs == true){
                break;
            }
        }
        if ($charIs == false){
            echo("false");
            exit;
        }
    }
    echo("true");
?>