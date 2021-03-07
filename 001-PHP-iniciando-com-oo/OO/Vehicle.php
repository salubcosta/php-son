<?php

require_once "IVehicle.php";

abstract class Vehicle implements IVehicle
{
    private $brand;
    private $color;
    private $engine;

    public function __construct($brand = '', $color = '')
    {
        $this->setBrand($brand);
        $this->setcolor($color);
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function getMessage()
    {
        return "{$this->getBrand()} - {$this->getColor()} - {$this->getEngine()}";
    }
}