<?php
    $input = readline();
    if(preg_match("/:\/\/.*\..*/",$input)){
        $patterns = array("/https:\/\//", "/http:\/\//","/ftp:\/\//");
        $expression = array("https ", "http ", "ftp ");
        $out = preg_replace($patterns,$expression,$input);
        if($out!=$input)
            echo preg_replace("/[\/@]/"," ",$out);
        else
            echo "Something goes wrong";
    } else
        echo "Something goes wrong";
?>