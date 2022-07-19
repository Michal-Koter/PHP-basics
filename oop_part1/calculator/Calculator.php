<?php

class Calculator
{
    private $a;
    private $b;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add()
    {
        return $this->a + $this->b;
    }

    public function sub()
    {
        return $this->a - $this->b;
    }

    public function mul()
    {
        return $this->a * $this->b;
    }

    public function div()
    {
        if($this->b != 0){
            return $this->a / $this->b;
        } else {
            echo "Division by 0";
        }
    }
}