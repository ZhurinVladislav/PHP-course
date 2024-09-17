<?php

$a = rand(0, 1);

echo $a . PHP_EOL;

$b = $a == 0 ? null : rand(1, 3);

var_dump($b);

switch ($b) {
    case null:
        var_dump('переменая ровна NULl');
        break;
    case 1:
        var_dump('переменая ровна 1');
        break;
    default:
        var_dump('переменая ровна ' . $b);
        break;
}

var_dump(isset($b));

$e = $b ?? rand(20, 30);

var_dump($e);
