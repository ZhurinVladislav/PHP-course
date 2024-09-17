<?php

class Employee
{
    public $name, $position, $age;

    public function setParameters($name, $position, $age)
    {
        $this->name = $name;
        $this->position = $position;
        $this->age = $age;
    }

    public function showEmployeeInfo()
    {
        echo 'Сотрудник ' . $this->name . ' в должности ' . $this->position . PHP_EOL;
    }
}

class Accountant extends Employee
{
    public function prepareReport()
    {
        echo 'Я готовлю отчёт' . PHP_EOL;
    }
}

class CEO extends Employee
{
    public function fireEmployee($name)
    {
        echo 'Я уволил ' . $name . PHP_EOL;
    }
}

class Welder extends Employee
{
    public function makeWeld()
    {
        echo 'Я делаю сварку' . PHP_EOL;
    }
}

$accountant = new Accountant();
$accountant->setParameters('Иван', 'Главный бухгалтер', 40);
$accountant->prepareReport();
$accountant->showEmployeeInfo();
