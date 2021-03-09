<?php

namespace DevNortista\People;

class Person
{    
    use \DevNortista\GetterSetter; //Trait
    private $name;
    private $age;
    private $weight;

    // private $data = [];

    public function __construct()
    {
        echo "Instanteated class" . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        echo 'Runned into method setName' . PHP_EOL;
    }

    public function getName()
    {
        return ucfirst($this->name);
    }

    public function setAge(int $age)
    {
        $this->age = $age;
        echo 'Runned into method setAge' . PHP_EOL;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    public function setWeight(float $weight)
    {
        $this->weight = $weight;
        echo 'Runned into method setWeight' . PHP_EOL;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function __call($method, $properties)
    {
        var_dump($method, $properties);
    }

    public function __toString():string
    {
        return "{$this->name}, {$this->age}, {$this->weight}";
    }
}