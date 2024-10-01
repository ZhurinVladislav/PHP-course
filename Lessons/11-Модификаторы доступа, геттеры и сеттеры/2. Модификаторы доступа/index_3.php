<?php

class Building
{
    protected $floors, $material;
    protected function setFloorsNumber($floorsNumber)
    {
        if ($floorsNumber > 20) {
            echo 'Количество этажей не может быть больше 20' . PHP_EOL;
            return;
        }

        $this->floors = $floorsNumber;
    }
}

class House extends Building
{
    private $heatingType, $address;

    public function __construct($floorsNumber, $material, $heatingType, $address)
    {
        $this->material = $material;
        $this->heatingType = $heatingType;
        $this->address = $address;
        $this->setFloorsNumber($floorsNumber);
    }

    public function showHouseDescription()
    {
        echo $this->material . PHP_EOL;
        echo $this->heatingType . PHP_EOL;
        echo $this->address . PHP_EOL;
    }
}

$cityHouse = new House(8, 'Кирпич', 'Газовое', 'Улица Садовая');
$cityHouse->showHouseDescription();
$cityHouse->heatingType = 'Уголь';
