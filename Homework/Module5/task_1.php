<?php

$word = "caesar cipher";
$shift = 18;
$coding = "";
$decoding = "";
$wordLen = strlen($word);
$number = 26;

for ($i = 0; $i < $wordLen; $i++) {

    if ($word[$i] == " ") {
        $symbol = ord($word[$i]);
    } else {
        $symbol = ord($word[$i]) + $shift;
    }

    if ($symbol > ord("z")) {
        $coding .= chr($symbol - $number);
    } else {
        $coding .= chr($symbol);
    }
}
var_dump($coding);

for ($i = 0; $i < $wordLen; $i++) {
    if ($coding[$i] == " ") {
        $symbol = ord($coding[$i]);
        $decoding .= chr($symbol);
    } else {
        $symbol = ord($coding[$i]) - $shift;

        if (ord($coding[$i]) < ord("a") - 1 + $shift) {
            $decoding .= chr($symbol + $number);
        } else {
            $decoding .= chr($symbol);
        }
    }
}
var_dump($decoding);
