<?php
    print_r( strlen(preg_replace("/[^1-9]*$|^-?[0-9]*[.,]?/", "",readline())));
?>