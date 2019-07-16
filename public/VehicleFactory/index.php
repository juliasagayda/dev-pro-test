<?php
include 'FactoryClasses.php';

$factory = new CarV();
var_dump($factory->create('car'));
