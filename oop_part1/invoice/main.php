<?php
include_once "Invoice.php";

$invoice = new Invoice(1234,"description",500,22);
echo $invoice->amount() . "\n";
$invoice2 = new Invoice(4321,"desc",0,22);
echo $invoice2->amount();