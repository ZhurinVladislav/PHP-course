<?php

$searchRoot = "../Module-7/test_search";
$searchName = 'test.txt';
$searchResult = [];

function searchFiles(string $searchRoot, string $searchName, array &$searchResult): void
{
    $dirRoot = scandir($searchRoot);
    foreach ($dirRoot as $file) {
        $route = $searchRoot . '/' . $file;

        if ($file !== '.' && $file !== '..') {
            if (is_dir($route)) {
                searchFiles($route, $searchName, $searchResult);
            } elseif ($file === $searchName) {
                $searchResult[] = $route;
            }
        }
    }
}

searchFiles($searchRoot, $searchName, $searchResult);

function filter(string $item): bool
{
    return filesize($item) > 0;
}

$searchResult = array_filter($searchResult, 'filter');

if (0 !== count($searchResult)) {
    foreach ($searchResult as $result) {
        echo "Успешно! Файл $searchName был найден по адресу: $result";
        echo PHP_EOL;
    }
} else {
    echo "Файл $searchName по адресу $searchRoot не был найден.";
    echo PHP_EOL;
}
