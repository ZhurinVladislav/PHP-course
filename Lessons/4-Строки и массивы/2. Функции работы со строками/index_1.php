<?php

$str = 'Hello world';
$word1 = substr($str, 0, 5);
echo $word1;

$part = substr($str, 4);
echo $part;

$part2 = substr($str, -5);
echo $part2;

$part3 = substr($str, 6, -3);
echo $part3;
