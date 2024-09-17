<?php

$numbers = [1, 2, 3, 4, 5,];

function factorial($n)
{
    return $n > 1 ? $n * factorial($n - 1) : $n;
}

$factorials = array_map('factorial', $numbers);

echo 'Результат ' . PHP_EOL;
print_r($factorials);
echo 'Исходный массив ' . PHP_EOL;
print_r($numbers);
