<?php

$testArray = [1, 2, 3,];

// foreach ($testArray as $value) {
//     $value = 0;
// }

foreach ($testArray as &$value) {
    $value = 0;
}

print_r($testArray);
