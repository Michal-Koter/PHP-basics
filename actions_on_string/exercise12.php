<?php
    $input = explode(" ",readline());
    $i = 0;
    do{
        $start = strspn($input[$i], '0123456789');
        $sub = substr($input[$i],$start);
        $position = strcspn($sub, '0123456789');
        $sub = substr($sub,0, $position);
        echo $sub;
        $i++;
    }while ($sub == null);
?>