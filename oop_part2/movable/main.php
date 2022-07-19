<?php
include_once "MovablePoint.php";

$point = new MovablePoint(40,40,2,2);
echo $point . "\n";
$point->moveDown();
echo $point . "\n";
$point->moveLeft();
echo $point . "\n";