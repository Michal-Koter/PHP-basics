<?php
        switch($_POST["polygon"]){
        case "trójkąt":
            $points = array(40, 70, 120, 50, 80,150);
            break;
        case "czworokąt":
            $points = array(40, 150, 150, 60, 240, 130, 230, 246);
            break;
        case "pięciokąt":
            $points = array(90, 50, 190, 80, 180, 130, 230, 246, 40, 210);
            break;
        case "sześciokąt":
             $points = array(60, 20, 190, 10, 250, 90, 200, 230, 40, 210, 10, 100);
             break;
    }

    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];

    $image = imagecreatetruecolor(300, 300);
    imagealphablending($image, false);
    $color = imagecolorallocatealpha($image, $red, $green, $blue, 50);
    imagefilledpolygon($image, $points, count($points)/2, $color);
    header("Content-Type: image/png");
    imagepng($image);
?>