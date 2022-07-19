<?php
    $input = readline();
    if ($input<1000 && $input>-1000){
        echo $input;
    } else {
        $thousands = preg_split("/[0-9][0-9][0-9]$/", $input);
        $hundreds = preg_split("/^$thousands[0]/",$input);
        echo $thousands[0] . "#" . $hundreds[1];
    }
?>