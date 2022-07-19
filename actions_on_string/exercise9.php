<?php
    $input = ord(readline());
    if ($input<90 || ($input<122 && $input>96)) {
        echo chr($input+1);
    } else {
        echo chr($input-25);
    }
?>