<?php
    $input = readline();
    preg_match("/[.[:alnum:]]+@[[:alnum:]]+(\.[[:alnum:]]+)+/",$input,$matches);
    if($matches[0]==$input)
        echo "True";
    else
        echo "False";
?>