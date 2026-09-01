<?php

abstract class Vehicle   // class abstaract
{
    abstract public function start();     // abstract public method for startation
}

class Car extends Vehicle        //class to display : engine started
{
    public function start()
    {
        echo "Car engine started.<br>";    // output
    }
}

class Bike extends Vehicle         
{
    public function start()
    {
        echo "Bike started.";
    }
}

echo "hello, Welcome!!!!. <br> ";
$car = new Car();
$bike = new Bike();

$car->start();
$bike->start();

?>
