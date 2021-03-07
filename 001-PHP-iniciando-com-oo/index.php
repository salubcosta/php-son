<?php

require_once "OO/Vehicle.php";
require_once "OO/Car.php";
require_once "OO/Motorcycle.php";

$ferrari = new Car('Ferrari', 'Red');
// $ferrari->setBrand('Ferrari');
// $ferrari->setColor('Red');
$ferrari->setEngine(300);
$ferrari->setDoor(4);

$honda = new Motorcycle;
$honda->setBrand('Honda');
$honda->setColor('Blue');
$honda->setEngine(150);


echo "Car: {$ferrari->getBrand()} - {$ferrari->getColor()} - {$ferrari->getEngine()} - {$ferrari->getDoor()} <br />";
echo "Car: {$honda->getMessage()}";