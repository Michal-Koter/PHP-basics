<?php
include_once "Movable.php";

class MovablePoint implements Movable
{
    private $x;
    private $y;
    private $xSpeed;
    private $ySpeed;

    /**
     * @param $x
     * @param $y
     * @param $xSpeed
     * @param $ySpeed
     */
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }


    public function moveRight()
    {
        $this->setX($this->x+$this->xSpeed);
    }

    public function moveLeft()
    {
        $this->setX($this->x-$this->xSpeed);
    }

    public function moveDown()
    {
        $this->setY($this->y-$this->ySpeed);
    }

    public function moveUp()
    {
        $this->setX($this->y+$this->ySpeed);
    }

    public function __toString()
    {
        return "My current location is ({$this->getX()},{$this->getY()}). My movement speed is {$this->getXSpeed()} on X axis, and {$this->getYSpeed()} on Y axis.";
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
}