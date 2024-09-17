<?php

$a = false;
// $b = true;
$b = false;
$c = true;

// if ($a && $b) {
//     $c = 1;
// } else {
//     $c = 0;
// }
// var_dump($c);


// if ($a || $b) {
//     $d = 1;
// } else {
//     $d = 0;
// }
// var_dump($d);

// $c = $a && $b ? 1 : 0;
// var_dump($c);

// $d = $a || $b ? 1 : 0;
// var_dump($d);

$d = $a || ($b && $c) ? 1 : 0;
var_dump($d);

$d = $a || !($b && $c) ? 1 : 0;
var_dump($d);
