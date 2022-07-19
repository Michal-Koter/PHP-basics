<?php
    $filename = "../tmp/data.txt";
    $file = fopen($filename,"r");
    $data = explode(" ",fread($file,filesize($filename)));
    $sum = 0;
    foreach($data as $val){
        $sum += (int)$val;
    }
    echo $sum;
    fclose($file);
?>