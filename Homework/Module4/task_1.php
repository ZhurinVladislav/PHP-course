<?php

$str1 = "Лето пришло";
$part1 = strrpos($str1, ' ');

$part2 = substr($str1, 0, $part1);
echo $part2;

$part3 = substr($str1, ++$part1);
echo $part3;
