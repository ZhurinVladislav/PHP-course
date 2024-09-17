<?php

$a = 2;

if ($a > 10) {
    $b = 1;
} else {
    $b = 0;
}

var_dump($b);

$c = $a > 10 ? 2 : ($a > 5 ? 3 : 4);
var_dump($c);
