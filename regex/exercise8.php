<?php
    $text = readline();
    preg_match_all('/[aeouiAEOUI]/', $text, $test, PREG_OFFSET_CAPTURE);
    echo count($test[0]);
?>