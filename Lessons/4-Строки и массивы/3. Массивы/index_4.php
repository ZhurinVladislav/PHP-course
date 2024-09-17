<?php

$str = 'Hello world';
$list1 = explode(' ', $str);
// var_dump($list1);

$list2 = explode('!', $str);
// var_dump($list2);

$list3 = [1, 3, 5, 7];
$str = implode('-!-', $list3);
echo $str;
