<?php

// $list1 = [
// 	'a' => 'word a',
// 	'b' => 'word b',
// ];

// $list2 = [
// 	'c' => 'word c',
// 	'd' => 'word d',
// 	'a' => 'word a2',
// ];

// $list = array_merge($list1, $list2);
// var_dump($list);

// $list1 = [
// 	'a',
// 	'b',
// 	'c',
// ];

// $list2 = [
// 	'd',
// 	'e',
// 	'a',
// ];

// $list = array_merge($list1, $list2);
// var_dump($list);

$list1 = [
	'a' => 'word a',
	'word b',
];

$list2 = [
	'c' => 'word c',
	'a' => 'word a2',
	'word d',
];

$list = array_merge($list1, $list2);
var_dump($list);
