<?php
    $filename = readline();
    if(!file_exists("../tmp")){
        mkdir("../tmp");
    }
    if(!file_exists("../tmp/$filename")) {
        $file = fopen("../tmp/$filename", "x");
    } else {
        $file = fopen("../tmp/$filename","r+");
    }
    $data = readline();
    fwrite($file,$data);
    fclose($file);
?>