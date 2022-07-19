<?php
    $filename = readline();
    if(!file_exists("../tmp")){
        mkdir("../tmp");
    }
    if(!file_exists("../tmp/$filename")){
        $file = fopen("../tmp/$filename","x");
        echo "True";
        fclose($file);
    }
?>