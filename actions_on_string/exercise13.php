<?php
    $input = readline();
    $out = reduce(reduce($input));
    if ($input[0] == '-'){
        echo "-";
    }
    if($out[0] != '.')
        echo $out;
    else
        echo "0" . $out;

    function reduce($str){
        $position = strspn($str, '-0');
        return strrev(substr($str,$position));
    }
?>