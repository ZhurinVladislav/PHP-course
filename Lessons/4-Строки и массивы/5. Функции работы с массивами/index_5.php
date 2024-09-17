<?php

$list1 = [
	'a',
	'b',
	'c',
];
$list2 = array_reverse($list1);
var_dump($list2);

$list3 = [
	'a' => 'word a',
	'b' => 'word b',
	'c' => 'word c',
];

$list4 = array_reverse($list2);
var_dump($list4);

$list5 = [
	'a',
	'b',
	'c',
	'd',
];

$list6 = array_reverse($list5);
$list7 = array_reverse($list5, true);
var_dump($list6);
var_dump($list7);
