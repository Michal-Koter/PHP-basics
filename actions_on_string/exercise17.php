<?php
    $text = readline();
    $replace = array("\\","/",":","*","?","\"","<",">",".","|","+","-","'");
    $numbers = explode(" ",trim(str_replace($replace, " ", $text)));
    foreach($numbers as $num){
        if(strlen($num)!=0)
            echo $num . " ";
    }
?>