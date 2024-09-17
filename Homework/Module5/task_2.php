<?php

$deposit = 100000;
$result = $deposit * 2;
$rate = 8;

for ($i = 1; $deposit < $result; $i++) {
    $deposit += $deposit * ($rate / 100);

    echo "Год: $i. Процент: $rate%. Депозит сейчас: " . (int)$deposit . " руб." . PHP_EOL;

    if ($i % 3 == 0) {
        $rate += 2;
    }
}
