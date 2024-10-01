<?php

class Test
{
    public static $publicField = 20;
    private static $privateField = 10;
    protected static $protectedField = 1;

    public function showPrivateField()
    {
        echo self::$privateField . PHP_EOL;
    }

    public function showProtectedField()
    {
        echo self::$protectedField . PHP_EOL;
    }
}

class Inherit extends Test
{
    public function showPrivateField()
    {
        echo self::$privateField . PHP_EOL;
    }

    public function showProtectedField()
    {
        echo self::$protectedField . PHP_EOL;
    }
}

// $testObject = new Test();
$testObject = new Inherit();
echo $testObject::$publicField . PHP_EOL;
// echo $testObject::$privateField . PHP_EOL;
echo $testObject->showPrivateField();
// echo $testObject::$protectedField . PHP_EOL;
echo $testObject->showProtectedField();
