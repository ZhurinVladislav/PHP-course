<?php

$str1 = 'Hello world';
$str2 = str_replace('Hello', 'Hi', $str1);
echo $str2;

$str3 = str_replace('HeLLo', 'Hi', $str1);
echo $str3;

$str4 = str_ireplace('HeLLo', 'Hi', $str1);
echo $str4;

$str5 = 'abc abc';
$str6 = str_replace('abc', '123', $str5, $count);
echo $str6;
var_dump($count);
