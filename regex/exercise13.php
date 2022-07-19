<?php
    preg_match("/[\[\(\<\{][[:graph:]]*[\]\)\}\>]/", readline(),$output);
    echo preg_replace("/[\[\(\<\{]|[\]\>\}\)]/","", $output[0]);
?>