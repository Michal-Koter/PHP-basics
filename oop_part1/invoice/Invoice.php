<?php

class Invoice
{
    private int $product_number;
    private string $product_description;
    private $quantity;
    private float $pricePerItem;

    public function __construct($product_number,$product_description,$quantity,$pricePerItem)
    {
        $this->product_number = $product_number;
        $this->product_description = $product_description;
        $this->quantity = $quantity;
        $this->pricePerItem = $pricePerItem;
    }

    public function __get($property) : mixed
    {
        if($property == "product_number"){
            return $this->product_number;
        }
        if($property == "product_description"){
            return $this->product_description;
        }
        if($property == "quantity"){
            return $this->quantity;
        }
        if($property == "pricePerItem"){
            return $this->pricePerItem;
        }
        return null;
    }

    public function __set($property, $value)
    {
        if($property == "product_number"){
            if(is_int($value)) {
                $this->product_number = $value;
            } else {
                echo "'$value' is not integer typ";
            }
        }
        if($property == "product_description"){
            if(is_string($value)) {
                $this->product_description = $value;
            } else {
                echo "'$value' is not string type";
            }
        }
        if($property == "quantity"){
            $this->quantity = $value;
        }
        if($property == "pricePerItem"){
            if(is_float($value)) {
                $this->pricePerItem = $value;
            } else {
                echo "'$value' is not flaot type";
            }
        }
    }

    public function amount()
    {
        if($this->pricePerItem > 0 && $this->quantity > 0){
            return $this->quantity * $this->pricePerItem;
        } else {
            return 0;
        }
    }
}