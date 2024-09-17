<?php

class Student
{
    public static $department = 'Иностранных языков';
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showDepartment()
    {
        echo self::$department . PHP_EOL;
    }

    public static function changeDepartment($department)
    {
        self::$department = $department;
    }
}

$studentOne = new Student('Василий');
// $studentOne->changeDepartment('Компьютерных систем и сетей');
Student::changeDepartment('Факультет туризма');
$studentTwo = new Student('Пётр');

$studentOne->showDepartment();
$studentTwo->showDepartment();
