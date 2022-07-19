<?php
    $input = readline();
    preg_match_all("/[b-df-hj-np-tvwxzB-DF-HJ-NP-TVWXZ][aeiouyAEIOUY]/",$input,$matches,PREG_PATTERN_ORDER);
    $mat= $matches[0];
    $expression = array();
    for($i=0;$i<count($mat);$i++){
        $expression[] = $mat[$i][0]."-".$mat[$i][1];
        $mat[$i] = "/$mat[$i]/";
    }
    echo preg_replace($mat, $expression, $input);
?>