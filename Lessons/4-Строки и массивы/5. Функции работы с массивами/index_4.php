<?php

$list1 = [
	'a' => 'word a',
	'b' => 'word b',
	'c' => 'word a',
];

$list2 = array_flip($list1);
var_dump($list2);
