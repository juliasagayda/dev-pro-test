<?php

include 'OOPClasses.php';

$truck = new Truck();
var_dump($truck->speed('60'));

$moto = new Motorcycle();

$human = new Person('Tom', 30);
$name = $human->getName();

var_dump($human->move('left'));


