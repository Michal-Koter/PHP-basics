<?php
    $date = explode('-',readline());
    if(checkdate($date[1],$date[0],$date[2]))
        echo "Correct date";
    else
        echo "Incorrect date";
?>