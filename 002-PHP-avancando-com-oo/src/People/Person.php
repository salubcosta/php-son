<?php

namespace DevNortista\People;

class Person
{    
    private $data = [];

    public function showName(string $name)
    {
        $this->data[] = $name;
    }

    public function showAge(int $age)
    {
        $this->data[] = $age;
    }

    public function showWeight(float $weight)
    {
        $this->data[] = $weight;
    }
}