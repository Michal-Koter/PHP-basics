<?php
include_once "Animal.php";
include_once "Dog.php";

$animal = new Animal();
$dog= new Dog();

echo $animal->getParent() . "\n";
echo $dog->getParent() . "\n";