<?php
    $date = date_create_from_format('Y-m-d', readline());
    echo $date->format("F") . " have " . $date->format("t") . " days";
?>