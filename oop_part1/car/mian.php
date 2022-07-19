<?php
include_once "Car.php";
include_once "NewCar.php";

$car = new NewCar("Ford fokus",50000.0,4.68, true,true ,false);
echo $car;
echo "\n";
echo "Value: " . $car->value() . " zł";