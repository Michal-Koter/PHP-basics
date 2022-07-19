<?php
include_once "Car.php";

class NewCar extends Car
{
    private bool $alarm;
    private bool $radio;
    private bool $air_conditioning;

    public function __construct(string $model, float $price, float $exchangeRate, bool $alarm, bool $radio, bool $air_conditioning)
    {
        parent::__construct($model, $price, $exchangeRate);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->air_conditioning = $air_conditioning;
    }

    public function value(): float
    {
        $add = $this->getPrice();
        if($this->alarm){
            $add += $this->getPrice() * 0.05;
        }
        if($this->radio){
            $add += $this->getPrice() * 0.07;
        }
        if($this->air_conditioning){
            $add += $this->getPrice() * 0.1;
        }
        return ($this->getPrice()+$add) * $this->getExchangeRate();
    }

    public function __toString() : string
    {
        if($this->alarm) $alarm="yes"; else $alarm="no";
        if($this->radio) $radio="yes"; else $radio="no";
        if($this->air_conditioning) $air_conditioning="yes"; else $air_conditioning="no";
        return "Car information:\n\tmodel: {$this->getModel()}\n\tprice in euro: {$this->getPrice()}\n\trate: {$this->getExchangeRate()}\n\talarm: $alarm\n\tradio: $radio\n\tclimatronic: $air_conditioning";
    }

    public function getAlarm() : bool
    {
        return $this->alarm;
    }
    public function setAlarm(bool $is)
    {
        $this->alarm = $is;
    }

    public function getRadio() : bool
    {
        return $this->radio;
    }
    public function setRadio(bool $is)
    {
        $this->radio = $is;
    }

    public function getAir_conditioning() : bool
    {
        return $this->air_conditioning;
    }
    public function setAir_conditioning(bool $is)
    {
        $this->air_conditioning = $is;
    }
}