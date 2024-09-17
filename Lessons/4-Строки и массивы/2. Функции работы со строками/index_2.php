<?php

$str1 = 'Hello world';
$index1 = strpos($str1, 'Hello');

var_dump($index1);

$str2 = 'abc abc';
$index2 = strpos($str2, 'abc', 2);

var_dump($index2);

$str3 = 'abc abc';
$index3 = strpos($str3, 'ecd');

var_dump($index3);

$str4 = 'abc abc';
$index4 = strpos($str4, 'ABC');

var_dump($index4);

$str5 = 'abc abc';
$index5 = stripos($str5, 'ABC');

var_dump($index5);
