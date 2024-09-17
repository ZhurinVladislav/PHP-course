<?php

$exampleStr = 'abracadabra';
$exampleStrLen = strlen($exampleStr);

for ($i = 0; $i < $exampleStrLen; $i++) {
    if ($exampleStr[$i] === 'b') {
        $position = $i;
        break;
    }
}

echo $i + 1;
