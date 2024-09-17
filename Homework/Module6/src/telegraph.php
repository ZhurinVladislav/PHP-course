<?php

$textStorage = [];

function add(array &$arr, string $title, string $text): void
{
    $arr[] = ['title' => $title, 'text' => $text];
}

add($textStorage, 'Первый текст', 'Описание первого текста');
add($textStorage, 'Второй текст', 'Описание второго текста');

function remove(array &$arr, int $index): bool
{
    if (array_key_exists($index, $arr)) {
        unset($arr[$index]);
        return true;
    }
    return false;
}

var_dump(remove($textStorage, 0));
var_dump(remove($textStorage, 5));
var_dump($textStorage);

function edit(int $index, string $title, string $text, array &$arr): bool
{
    if (!array_key_exists($index, $arr)) {
        return false;
    }

    if ($title === '') {
        $title = $arr[$index]['title'];
    }

    if ($text === '') {
        $text = $arr[$index]['text'];
    }

    $arr[$index] = ['title' => $title, 'text' => $text];
    return true;
}

var_dump(edit(1, 'Теперь это первый текст', '', $textStorage));
var_dump($textStorage);
var_dump(edit(3, 'Теперь это первый текст', 'Теперь это описание первого текста', $textStorage));
