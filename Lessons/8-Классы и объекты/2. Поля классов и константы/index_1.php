<?php

class Building
{
    const MAX_FLOORS = 20;
    private $floors;

    public function setFloorsNumber($floorsNumber)
    {
        echo "Вызван метод " . __METHOD__ . PHP_EOL;
        if ($floorsNumber > self::MAX_FLOORS) {
            echo "Превышено максимальное количество этажей" . PHP_EOL;
            return;
        }
        $this->floors = $floorsNumber;
    }

    public function showFloorsNumber()
    {
        echo $this->floors . PHP_EOL;
    }

    public function showClassName()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

$building = new Building();
$building->setFloorsNumber(30);
$building->setFloorsNumber(10);
$building->showFloorsNumber();
$building->showClassName();

$newBuilding = new Building();
$newBuilding->setFloorsNumber(15);
$newBuilding->showFloorsNumber();

echo Building::class;
