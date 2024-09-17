<?php

$simpleNumber = 7;

function cbOne($name)
{
    return 'My name is ' . $name;
}

function runCallBack($fName)
{
    if (is_callable($fName)) {
        echo call_user_func($fName, $fName) . PHP_EOL;
    }
}

runCallBack('cbOne');
runCallBack('simpleNumber');
