<?php

require_once "OO/Car.php";

$ferrari = new Car;
$ferrari->setBrand('Ferrari');
$ferrari->setColor('Red');
$ferrari->setEngine(300);


echo "{$ferrari->getBrand()} - {$ferrari->getColor()} - {$ferrari->getEngine()}";