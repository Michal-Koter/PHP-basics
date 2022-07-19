<?php
    $numOct = explode(" ", (string)readline());
    for ($i=0; $i < count($numOct); $i++){
        $result = 0;
        $sizeOfNum = strlen($numOct[$i]);
        for ($j=0; $j < $sizeOfNum; $j++){
            $temp = 1;
            for ($k=$sizeOfNum-$j-1; $k >0; $k--){
                $temp *= 8;
            }
            $temp *= $numOct[$i][$j];
            $result += $temp;
        }
        printf("0x%x ", $result);
    }
?>