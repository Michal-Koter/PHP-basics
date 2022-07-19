<?php
    if(!empty($_POST["red"])){
        $red = $_POST["red"];
    } else {
        $red = 0;
    }
    if(!empty($_POST["green"])){
        $green = $_POST["green"];
    } else {
        $green = 0;
    }
    if(!empty($_POST["blue"])){
        $blue = $_POST["blue"];
    } else {
        $blue = 0;
    }
    if(!empty($_POST["radius"])){
        $radius = $_POST["radius"];
    } else {
        $radius = 150;
    }

    $image = imagecreatetruecolor($radius, $radius);
    $white = imagecolorallocate($image, 255, 255, 255);
    imagealphablending($image, false);
    imagefilledrectangle($image, 0, 0, $radius, $radius, $white);
    $color = imagecolorallocatealpha($image, $red, $green, $blue, 50);
    imagefilledellipse($image, $radius/2, $radius/2, $radius, $radius, $color);
    header("Content-Type: image/png");
    imagepng($image);
?>