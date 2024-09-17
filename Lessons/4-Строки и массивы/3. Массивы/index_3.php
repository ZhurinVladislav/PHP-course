<?php

$list1 = [1, 3, 5, 7,];
// echo $list1[2];

$list2 = ['vegetables' => 'Овощи', 'fruits' => 'Фрукты', 'berries' => 'Ягоды',];
// echo $list2['vegetables'];

$a = sizeOf($list1);
var_dump($a);

$b = count($list2);
var_dump($b);
