<?php

class Car
{
    static int $howMany;
    private string $model;
    private float $price;
    private float $exchangeRate;

    public function __construct(string $model, float $price, float $exchangeRate)
    {
        $this->model = $model;
        $this->price = $price;
        $this->exchangeRate = $exchangeRate;
    }

    public function value() : float
    {
        return $this->price * $this->exchangeRate;
    }

    public function __toString() : string
    {
        return "Car information:\n\tmodel: $this->model\n\tprice in euro: $this->price\n\texchange rate: $this->exchangeRate\n";
    }

    static function getHowMany() : int
    {
        return self::$howMany;
    }

    static function setHowMany(int $many)
    {
        self::$howMany = $many;
    }

    public function getModel() : string
    {
        return $this->model;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(float $rate)
    {
        $this->exchangeRate = $rate;
    }
}