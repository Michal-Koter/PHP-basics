<?php
    $input = readline();
    $size = strlen($input)-1;
    if( preg_match("/^#[0-9a-fA-F]*$/",$input))
        echo "True";
    else
        echo "False";
?>