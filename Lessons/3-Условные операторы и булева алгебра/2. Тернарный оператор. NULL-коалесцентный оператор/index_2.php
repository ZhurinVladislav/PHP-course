<?php

$a = null;

if ($a == null) {
    $b = 2;
} else {
    $b = $a;
}

var_dump($b);

// $c = $a ?? 10;

// var_dump($c);

// $d = 100;
// $e = $d ?? 'abc';
// var_dump($e);

$c = null;
$d = $a ?? $c ?? 22;
var_dump($d);
