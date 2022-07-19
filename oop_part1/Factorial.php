<?php

class Factorial
{
    private int $n;

    public function __construct($n)
    {
        if(is_int($n) && $n >= 0) {
            $this->n = $n;
        } else {
            echo "Not number or lack argument";
        }
    }

    public function result(): float|int
    {
        return $this->factorial($this->n);
    }

    private function factorial($num): float|int
    {
        if($num < 2) {
            return 1;
        } else {
            return $num * $this->factorial($num-1);
        }
    }
}