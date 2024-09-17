<?php

$list1 = [1, 2, 3,];
$list2 = [4, 5, 6,];

$list = [
	's1' => $list1,
	's2' => $list2,
	's3' => [7, 8, 9,],
];

// var_dump($list['s3']);
// var_dump($list['s3'][0]);

$cities = [
	'russia' => [
		'msk' => 'Москва',
		'spb' => 'Санкт-Петербург',
	],
	'germany' => [
		'Berlin',
		'Munchen',
	],
];

var_dump($cities['russia']['spb']);
