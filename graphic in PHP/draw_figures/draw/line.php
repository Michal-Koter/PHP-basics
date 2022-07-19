<?php
    if(!empty($_POST["x_start"])){
        $x_start = $_POST["x_start"];
    } else {
        $x_start = 1;
    }
    if(!empty($_POST["y_start"])){
        $y_start = $_POST["y_start"];
    } else {
        $y_start = 1;
    }
    if(!empty($_POST["x_end"])){
        $x_end = $_POST["x_end"];
    } else {
        $x_end = 50;
    }
    if(!empty($_POST["y_end"])){
        $y_end = $_POST["y_end"];
    } else {
        $y_end = 50;
    }

    $x = max($x_start,$x_end);
    $y = max($y_start,$y_end);

    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];

    $image = imagecreatetruecolor($x, $y);
    imagealphablending($image, false);
    $color = imagecolorallocatealpha($image, $red, $green, $blue, 50);
    imageline($image, $x_start,$y_start,$x_end,$y_end,$color);
    header("Content-Type: image/png");
    imagepng($image);
?>