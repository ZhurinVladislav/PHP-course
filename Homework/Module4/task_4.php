<?php

$arr1 = [
    'a' => 'str_a',
    'b' => 'str_b',
    'c' => 'str_c',
    'd' => 'str_d',
    'e' => 'str_a',
];
$lng1 = count($arr1);
var_dump($lng1);

$arr2 = array_flip($arr1);
$lng2 = count($arr2);
var_dump($lng2);

var_dump($lng1 != $lng2);
