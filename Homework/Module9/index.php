<?php

class TelegraphText
{
    public $title, $text, $author, $published, $slug;
    const FILE_EXTENSION = '.txt';

    public function __construct(string $title, string $text, string $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
        // Запись в поле published текущей даты
        $this->published = date("d/m/y/h/i");
        // Запись в поле slug название файла
        $this->slug = str_replace(" ", "-", $this->title . self::FILE_EXTENSION);
    }

    // Метод записи текста в файл
    public function storeText(): string
    {
        $arrayText = [
            'title' => $this->title,
            'text' => $this->text,
            'author' => $this->author,
            'published' => $this->published,
        ];

        file_put_contents($this->slug, serialize($arrayText));

        return $this->slug;
    }

    // Метод загрузки текста из файла
    public static function loadText(string $slug): ?TelegraphText
    {
        if (file_exists($slug) && filesize($slug) > 0) {
            $arrayText = unserialize(file_get_contents($slug));

            return new TelegraphText($arrayText['title'], $arrayText['text'], $arrayText['author']);
        } else {
            echo 'Нет такого файла' . PHP_EOL;
            return null;
        }
    }

    // Метод редактирования текста
    public function editText(string $title, string $text): void
    {
        if ($title !== '') {
            $this->title = $title;
        }

        if ($text !== '') {
            $this->text = $text;
        }
    }
}

abstract class Storage
{
    abstract function create(TelegraphText $obj): string;
    abstract function read(string $slug): ?TelegraphText;
    abstract function update(string $slug, TelegraphText $object): ?TelegraphText;
    abstract function delete(string $slug);
    abstract function list(): array;
}

abstract class User
{
    public $id, $name, $role;

    abstract function getTextsToEdit();
}

class FileStorage extends Storage
{
    function create(TelegraphText $object): string
    {
        $filename = $object->slug . '_' . date("d/m/y/h/i");

        if (file_exists($filename)) {
            $i = 1;

            while (file_exists($filename) . '_' . $i) {
                $i++;
            }

            $filename .= '_' . $i;
        }

        $object->slug = $filename;

        file_put_contents($filename, serialize($object));

        return $object->slug;
    }

    function read(string $slug): ?TelegraphText
    {
        if (file_exists($slug) && filesize($slug) > 0) {
            $arrayText = unserialize(file_get_contents($slug));

            return new TelegraphText($arrayText['title'], $arrayText['text'], $arrayText['author']);
        } else {
            echo 'Нет такого файла' . PHP_EOL;
            return null;
        }
    }

    function update(string $slug, TelegraphText $object): ?TelegraphText
    {
        if (file_exists($slug) && filesize($slug) > 0) {
            $arrayText = unserialize(file_get_contents($slug));

            return $object($arrayText['title'], $arrayText['text'], $arrayText['author']);
        } else {
            echo 'Нет такого файла' . PHP_EOL;
            return null;
        }
    }

    function delete(string $slug)
    {
        if (file_exists($slug) && filesize($slug) > 0) {
            unlink($slug);
        } else {
            echo 'Нет такого файла' . PHP_EOL;
            return null;
        }
    }

    function list(): array
    {
        $files = [];
        $dir = scandir('../Module-9' . '/*.txt');

        foreach ($dir as $file) {
            if ($file !== '.' && $file !== '..') {
                if (is_file($file)) {
                    $data = file_get_contents($file);
                    $file = unserialize($data);
                }
                $files[] = basename($file);
            }
        }
        return $files;
    }
}
