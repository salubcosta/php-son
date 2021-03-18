<?php

interface Bird 
{
    public function walk();
    public function swim();
}

interface BirdThatFly extends Bird
{
    public function fly();
}

class Eagle implements BirdThatFly
{
    public function fly()
    {
        //
    }

    public function walk()
    {
        //
    }
    
    public function swim()
    {
        //
    }
}

class Penguin implements Bird
{
    /**
     * Aqui temos um problema de interface segregation
     * 
     * Forçar a implementar um método sem que ele possa fazer nada.
     * 
     * Para resolver isso, criamos uma nova interface que herda de bird. E daí nessa interface colocamos o que precisamos.
     */
    // public function fly()
    // {
    //     throw new Exception('Penguin do not flies');
    // }

    public function walk()
    {
        //
    }
    
    public function swim()
    {
        //
    }
}

$peguin = new Penguin;
$eagle = new Eagle;