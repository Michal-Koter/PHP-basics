<?php
include_once "First.php";
include_once "Second.php";

$first = new First;
echo "First: " . $first->inc() . "\n";
echo "First: " . $first->inc() . "\n";
$second = new Second();
echo "Second: " . $second->inc() . "\n";