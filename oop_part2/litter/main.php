<?php
include_once "Litter.php";

$litter = new Litter();
echo $litter->aBigTalk() . "\n";
echo $litter->aSmallTalk() . "\n";
echo $litter->bigTalk() . "\n";
echo $litter->smallTalk() . "\n";