<?php

$list1 = [
	'a',
	'b',
	'c',
	'd',
];

$hasLetter = in_array('b', $list1);
$hasLetter2 = in_array('e', $list1);
var_dump($hasLetter);
var_dump($hasLetter2);

$hasLetter3 = array_search('e', $list1);
$hasLetter4 = array_search('b', $list1);
var_dump($hasLetter3);
var_dump($hasLetter4);

$list2 = [
	'a' => 'word a',
	'b' => 'word b',
];
$indexWord = array_search('word b', $list2);
var_dump($indexWord);
