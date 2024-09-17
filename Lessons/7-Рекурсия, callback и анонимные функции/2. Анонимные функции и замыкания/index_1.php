<?php

$password = 'password';

// $checkPassword = function ($userPassword) use ($password) {
//     return $userPassword === $password;
// };
$checkPassword = function ($userPassword) use (&$password) {
    return $userPassword === $password;
};

$password = 'der parol';

do {
    $userPassword = readline('Введите пароль ');
    if ($checkPassword($userPassword)) {
        echo 'Пароль верен' . PHP_EOL;
        break;
    } else {
        echo 'Пароль неверен' . PHP_EOL;
    }
} while (true);
