<?php

interface Animal
{
    public function makeNoise();
    public function makeMotion();
}

class Bird implements Animal
{
    public function makeNoise()
    {
        echo 'Кукареку!' . PHP_EOL;
    }

    public function makeMotion()
    {
        echo 'Я лечу!' . PHP_EOL;
    }
}

class Mammal implements Animal
{
    public function makeNoise()
    {
        echo 'Муу!' . PHP_EOL;
    }

    public function makeMotion()
    {
        echo 'Иду в никуда не спешу!' . PHP_EOL;
    }
}

class Farm
{
    private $animals;

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function showAnimals()
    {
        foreach ($this->animals as $animal) {
            $animal->makeNoise();
            $animal->makeMotion();
        }
    }
}

$cow = new Mammal();
$dog = new Mammal();
$penguin = new Bird();
$rooster = new Bird();

$farm = new Farm();

$farm->addAnimal($cow);
$farm->addAnimal($dog);
$farm->addAnimal($penguin);
$farm->addAnimal($rooster);

$farm->showAnimals();
