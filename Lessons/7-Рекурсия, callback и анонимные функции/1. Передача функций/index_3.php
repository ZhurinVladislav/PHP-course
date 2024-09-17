<?php

$numbers = [1, 2, 3, 4, 5,];

$newNumbers = array_map('sqrt', $numbers);

echo 'Результат ' . PHP_EOL;
print_r($newNumbers);
echo 'Исходный массив ' . PHP_EOL;
print_r($numbers);
