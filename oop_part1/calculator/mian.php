<?php
include_once "Calculator.php";

$calculator = new Calculator(5,6);
echo "Add: " . $calculator->add() . "\n";
echo "Sub: " . $calculator->sub() . "\n";
echo "Mul: " . $calculator->mul() . "\n";
echo "Div: " . $calculator->div() . "\n";