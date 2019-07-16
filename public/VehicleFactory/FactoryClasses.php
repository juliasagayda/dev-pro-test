<?php

abstract class AbstractFactory
{
    private $type;

    public function __construct($type) {
        $this->type = $type;
    }
}

class CarFactory extends AbstractFactory
{
    public function __construct($type) {
        parent::__construct($type);
        return "{" . $type . "}";
    }
}

class MotorcycleFactory extends AbstractFactory
{
    public function __construct($type) {
        parent::__construct($type);
        return "{" . $type . "}";
    }
}

class BicycleFactory extends AbstractFactory
{
    public function __construct($type) {
        parent::__construct($type);
        return "{" . $type . "}";
    }
}

class TruckFactory extends AbstractFactory
{
    public function __construct($type) {
        parent::__construct($type);
        return "{" . $type . "}";
    }
}

abstract class VehicleFactory {

    abstract public function create($type);
}

class CarV extends VehicleFactory
{
    public $type = 'car';

    public function create($type)
    {
        return new CarFactory($type);
    }
}

class MotorcycleV extends VehicleFactory
{
    public $type = 'motorcycle';

    public function create($type)
    {
        return new MotorcycleFactory($type);
    }
}

class BicycleV extends VehicleFactory
{
    public $type = 'bicycle';

    public function create($type)
    {
        return new BicycleFactory($type);
    }
}

class TruckV extends VehicleFactory
{
    public $type = 'truck';

    public function create($type)
    {
        return new TruckFactory($type);
    }
}