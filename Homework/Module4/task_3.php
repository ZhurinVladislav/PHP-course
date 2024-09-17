<?php

$arr1 = [
    'a' => 'str_a',
    'b' => 'str_b',
    'c' => 'str_c',
];
$arr2 = array_keys($arr1);

$str1 = implode(' ', $arr2);

echo $str1;
