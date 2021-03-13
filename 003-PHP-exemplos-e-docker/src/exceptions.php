<?php

class MyException01 extends Exception {}
class MyException02 extends Exception {}

class Car{
    public function drive(int $march = 1)
    {
        try {
            if($march == 10){
                throw new MyException01('unexists march 10!');
            }
            if($march == 9){
                throw new MyException02("Unexists march 9! ");
            }

            echo "Driving...";

        } catch(MyException01 | MyException02 $e){
            echo "Erro while driving. Error: {$e->getMessage()}";
        }
    }
}

$car = new Car;
$car->drive(10);