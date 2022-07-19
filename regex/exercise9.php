<?php
    $text = readline();
    $rep = readline();
    print_r( preg_replace("/[aouieAOUIE]/", "$rep", $text));
?>