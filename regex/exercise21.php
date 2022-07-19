<?php
    if(preg_match("/^[[:alpha:]][[:alpha:]_]{1,8}[[:alpha:]]$/",readline()))
        echo "True";
    else
        echo "False";
?>