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
        // $this->published = date("Y-m-d", null);
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

$telegraphText = new TelegraphText('test title', 'test text', 'Vladislav');
$telegraphText->editText('test title new', 'test text new');
$telegraphText->storeText();
$telegraphText->loadText($telegraphText->slug);
echo $telegraphText->title . PHP_EOL;
$telegraphText->editText('test title new2', 'test text new2');
$telegraphText->storeText();
$telegraphText->loadText($telegraphText->slug);
