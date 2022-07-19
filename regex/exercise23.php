<?php
    $input = readline();
    preg_match_all("/-?[0-9]*/",$input,$matches,PREG_PATTERN_ORDER);
    $sum = 0;
    foreach($matches[0] as $num){
        if($num != null)
            $sum += $num;
    }
    echo $sum;
?>