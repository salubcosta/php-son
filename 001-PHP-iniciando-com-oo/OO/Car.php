<?php

final class Car extends Vehicle
{
    private $door;

    public function getDoor()
    {
        return $this->door;
    }

    public function setDoor($door)
    {
        $this->door = $door;
    }
}