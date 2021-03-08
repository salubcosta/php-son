<?php

require __DIR__.'/autoload.php';

// $person = new DevNortista\People\Person;
// $person->showName('Salumao');
// $person->showAge(29);
// $person->showWeight(88.0);

// var_dump($person);


// Example of polymorphism
var_dump((new DevNortista\DB\MySql)->connect());
var_dump((new DevNortista\DB\Postgres)->connect());