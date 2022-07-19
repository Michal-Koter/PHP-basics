<?php
    if(!empty($_POST["radius"])){
        $radius = $_POST["radius"];
    } else {
        $radius = 150;
    }
    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];

    $image = imagecreatetruecolor($radius, $radius);
    $white = imagecolorallocate($image, 255, 255, 255);
    imagealphablending($image, false);
    imagefilledrectangle($image, 0, 0, $radius, $radius, $white);
    $color = imagecolorallocatealpha($image, $red, $green, $blue, 50);
    imagefilledellipse($image, $radius/2, $radius/2, $radius, $radius, $color);
    header("Content-Type: image/png");
    imagepng($image);
?>