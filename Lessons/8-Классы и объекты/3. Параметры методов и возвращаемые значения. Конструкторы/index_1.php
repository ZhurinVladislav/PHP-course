<?php

class TestClass
{
    private $testField_1, $testField_2;

    public function setValues()
    {
        $this->testField_1 = 'This is';
        $this->testField_2 = 'test';
    }

    public function showField()
    {
        echo $this->testField_1 . ' ' . $this->testField_2 . PHP_EOL;
    }
}

$testObject = new TestClass();
$testObject->setValues();

function showFields()
{
    $testField_1 = 'test function';
    echo $testField_1 . PHP_EOL;
}

showFields();

$testObject->showField();
