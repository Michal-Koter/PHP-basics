<?php
    $date = preg_split("/[ -.\/]/",readline());

    if($date[1]<=12 && $date[1]>0){
        if (preg_match("/1[02]|[13578]/",$date[1]) && $date[0]>0 && $date[0]<=31){
            showDate($date);
        } else if (preg_match("/11|[469]/",$date[1]) && $date[0]>0 && $date[0]<=30){
            showDate($date);
        } else if ($date[1]==2 && $date[0]>0 && $date[0]<=28){
            showDate($date);
        } else {
            echo "Something goes wrong";
        }
    } else {
        echo "Something goes wrong";
    }

    function showDate($date){
        $monthStr = array("October", "November", "December", "January", "February", "March", "April", "May", "June", "July", "August", "September");
        $monthNum = array("/10/", "/11/", "/12/", "/0?1/", "/0?2/", "/0?3/", "/0?4/", "/0?5/", "/0?6/", "/0?7/", "/0?8/", "/0?9/");
        $date[1] = preg_replace($monthNum, $monthStr, $date[1]);
        echo "$date[0] $date[1] $date[2]";
    }
?>