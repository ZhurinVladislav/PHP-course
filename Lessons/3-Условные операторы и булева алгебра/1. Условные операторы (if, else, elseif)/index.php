<?php

$a = 2;
$b = 3;
$c = 0;

// if ($a > $b) {
//     $c = 1;
// } elseif ($a <= $b) {
//     if ($a == $b) {
//         $c = 2.3;
//     } else {
//         $c = 2.6;
//     }
//     $c = 2;
// } else {
//     $c = 3;
// }

if ($a > $b) {
    $c = 1;
} elseif ($a == $b) {
    $c = 3;
}

var_dump($c);
