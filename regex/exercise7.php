<?php
    $address = explode('.',readline());
    $address = preg_replace('/^0*/', "", $address, 2);
    printf("%d.%d.%d.%d",$address[0],$address[1],$address[2],$address[3]);
?>