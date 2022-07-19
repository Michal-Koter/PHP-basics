<?php
    $contractions = array("/a/", "/e/", "/i/", "/o/", "/u/", "/A/","/E/","/I/","/O/","/U/");
    $expansions = array("-a-", "-e-", "-i-", "-o-", "-u-","-A-","-E-","-I-","-O-","-U-");
    $output = preg_replace($contractions, $expansions, readline());
    echo $output;
?>