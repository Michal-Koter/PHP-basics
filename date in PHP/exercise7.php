<?php
    $input = explode('-',readline());
    $date = mktime(0,0,0,$input[1],$input[2],$input[0]);
    $start = date("Y-m-d",$date);
    $days = readline();
    $after = DateTime::createFromFormat('U', $date+($days*86400));
    $before = DateTime::createFromFormat('U', $date-($days*86400));
    echo "Original date: $start\n";
    echo "Before $days days: {$before->format("Y-m-d")}\n";
    echo "After $days days: {$after->format("Y-m-d")}";
?>