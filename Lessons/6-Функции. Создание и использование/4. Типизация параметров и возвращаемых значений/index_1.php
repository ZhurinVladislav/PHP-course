<?php

function displayString(string $str, int $n): array
{
    $resultArray = [];
    for ($i = 0; $i < $n; $i++) {
        $resultArray[$i] = $str;
    }

    return $resultArray;
}

$resultArray = displayString('Test string', 3);

foreach ($resultArray as $result) {
    echo $result . PHP_EOL;
}
