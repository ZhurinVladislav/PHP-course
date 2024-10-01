<?php

class ParentText
{
    protected const TEST_CONST = 'Parent';
    public function showField()
    {
        // echo self::TEST_CONST . PHP_EOL;
        echo static::TEST_CONST . PHP_EOL;
    }
}

class InheritTest extends ParentText
{
    protected const TEST_CONST = 'Inherit';
    // public function showField()
    // {
    //     echo self::TEST_CONST . PHP_EOL;
    // }
}

$inheritObject = new InheritTest();
$inheritObject->showField();
