<?php

$letters = ['A', 'B'];
$numbers = [];

for ($j = 0; $j <= 999; $j++) {
    for ($i = 0; $i < 1 << 3; $i++) {
        $format = '%0' . 3 . 'b';
        $bin = sprintf($format, $i);
        $result = str_replace(["0", "1"], ["A", "B"], $bin);

        $numbers[] = substr($result, 0, 1) . str_pad($j, 3, "0", STR_PAD_LEFT) . substr($result, 1, 2);
    }
}

foreach ($numbers as $number) {
    echo $number;
    echo PHP_EOL;
}

foreach ($numbers as $key => $value) {
    $firstSymbol = $value[1];
    $secondSymbol = $value[2];
    $thirdSymbol = $value[3];

    if ($firstSymbol != $secondSymbol || $secondSymbol != $thirdSymbol) {
        unset($numbers[$key]);
    }
}

foreach ($numbers as $number) {
    echo $number;
    echo PHP_EOL;
}
