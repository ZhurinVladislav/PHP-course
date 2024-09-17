<?php

$visibleString = 'Very important information';

if (strlen($visibleString) > 0) {
    for ($i = 0; $i < strlen($visibleString); $i++) {
        echo $visibleString[$i] . PHP_EOL;
    }
}

function testOutput1($visibleString)
{
    if (strlen($visibleString) > 0) {
        for ($i = 0; $i < strlen($visibleString); $i++) {
            echo $visibleString[$i] . PHP_EOL;
        }
    }
}


function testOutput2()
{
    global $visibleString;
    if (strlen($visibleString) > 0) {
        for ($i = 0; $i < strlen($visibleString); $i++) {
            echo $visibleString[$i] . PHP_EOL;
        }
    }
}

$testOutput3 = function () use ($visibleString) {
    if (strlen($visibleString) > 0) {
        for ($i = 0; $i < strlen($visibleString); $i++) {
            echo $visibleString[$i] . PHP_EOL;
        }
    }
};
