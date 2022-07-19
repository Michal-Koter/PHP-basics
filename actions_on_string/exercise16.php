<?php
    $text = readline();
    for($i=0;$i<strlen($text);$i++){
        if ($text[$i] != ','){
            echo $text[$i];
        }
    }
?>