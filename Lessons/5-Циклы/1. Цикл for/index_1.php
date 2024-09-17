<?php

$testResults = [10, 34, 50, 70, 90, 20];

$candidatesNum = count($testResults);

for ($i = 0; $i < $candidatesNum; $i++) {
    if ($testResults[$i] > 70) {
        echo "Кандидат с номером {$i} набрал более 70 баллов\n";
    }
}
