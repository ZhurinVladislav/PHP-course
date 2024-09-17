<?php

trait VehicleFunctions
{
    public function ride()
    {
        echo 'Я могу ехать' . PHP_EOL;
    }

    public function fly()
    {
        echo 'Я могу летать' . PHP_EOL;
    }
}

class Car
{
    use VehicleFunctions;
}

class Plane
{
    use VehicleFunctions;
}

class FantomasCar
{
    use VehicleFunctions;

    public function escape()
    {
        $this->ride();
        $this->fly();
    }
}

$fantomasCar = new FantomasCar();
// $fantomasCar->ride();
// $fantomasCar->fly();
$fantomasCar->escape();
