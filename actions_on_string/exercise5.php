<?php
    $link = stripcslashes(readline());
    $chunks = explode("/", $link);
    echo $chunks[sizeof($chunks)-1];
?>