<?php
include_once "Greeting.php";

$greeting = new Greeting();
echo $greeting->sayHello() . $greeting->sayWorld();