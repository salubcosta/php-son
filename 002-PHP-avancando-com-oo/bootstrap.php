<?php

require __DIR__.'/autoload.php';

// $person = new DevNortista\People\Person;
// $person->showName('Salumao');
// $person->showAge(29);
// $person->showWeight(88.0);

// var_dump($person);


// Example of polymorphism
// var_dump((new DevNortista\DB\MySql)->connect());
// var_dump((new DevNortista\DB\Postgres)->connect());


// Kidding with Exceptions
// try {
//     (new DevNortista\DB\ORM)->tryBool(false);
// } catch(DevNortista\MyException $e) {
//     echo $e->getMessage();
// }

$people = new DevNortista\People\Person;

// $people->showName('Salumao');
// $people->showAge(29);


$people->name = "salumao";
$people->age = 29;
$people->weight = 88;

echo $people;