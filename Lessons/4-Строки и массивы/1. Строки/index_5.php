<?php

$str1 = 'hello';

var_dump($str1);

$str2 = 'привет';
var_dump($str2);

$length = strlen($str1);
var_dump($length);
$length = strlen($str2);
var_dump($length);

$length = mb_strlen($str1);
var_dump($length);
$length = mb_strlen($str2);
var_dump($length);
