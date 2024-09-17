<?php

function calculateOperation(int $a, int $b, string $operation = '+'): int
{
    if ($operation == '+') {
        return $a + $b;
    } elseif ($operation == '-') {
        return $a - $b;
    }
}

echo calculateOperation(3, 2) . PHP_EOL;
echo calculateOperation(3, 2, '-') . PHP_EOL;
