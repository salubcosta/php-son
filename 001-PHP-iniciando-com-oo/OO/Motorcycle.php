<?php

final class Motorcycle extends Vehicle
{
    public function setColor($color)
    {
        parent::setColor(strtoupper($color));
    }
}