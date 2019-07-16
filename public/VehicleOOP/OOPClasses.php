<?php

Interface VehicleInterface {

    public function addPerson($person);

}

Interface ControlInterface {

    public function move($control);
    public function speed($speed);
}

class Vehicle implements VehicleInterface, ControlInterface {

    public $person;
    public $control;
    public $speed;


    public function speed($speed) {
        return "Your speed is $speed";
    }

    public function move($control) {
        return "Now you are moving $control";
    }

    public function addPerson($person) {
        return "You add the $person";
    }

}

class Truck extends Vehicle {


}

class Person extends Vehicle {

    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name =  $name;
        $this->age =  $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

}

class Motorcycle extends Vehicle {


}

class Car extends Vehicle {


}

class Bicycle extends Vehicle {


}