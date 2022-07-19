<?php
    $text = readline();
    if (preg_match('/^[[:alnum:]]+[Gg][[:alnum:]]+.*$/',$text)==1)
        echo "True";
    else
        echo "False";
?>