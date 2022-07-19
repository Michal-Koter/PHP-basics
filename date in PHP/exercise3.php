<?php
    $input = explode('-',readline());
    $date = mktime(0,0,0,$input[1],$input[0],$input[2]);
    print_r($date);
?>