<?php

class Translator
{
    private $dictionary = ['en' => [], 'de' => []];
    private $language;

    public function __construct($language)
    {
        $this->language = $language;
        // Английский
        $this->addWord('лес', 'forest', 'en');
        $this->addWord('работа', 'work', 'en');
        // Немецкий
        $this->addWord('лес', 'Wald', 'de');
        $this->addWord('работа', 'Arbeit', 'de');
    }

    public function addWord(string $russianWord, string $translation, $language)
    {
        if (array_key_exists($translation, $this->dictionary[$this->language])) {
            return;
        }
        $this->dictionary[$this->language][$translation] = $russianWord;
    }

    public function translate($foreignWord)
    {
        if (array_key_exists($foreignWord, $this->dictionary[$this->language])) {
            return $this->dictionary[$this->language][$foreignWord] . PHP_EOL;
        }
        return false;
    }
}

$translationEn = new Translator('en');
$translationDe = new Translator('de');

echo $translationDe->translate('Wald') . PHP_EOL;
echo $translationEn->translate('forest') . PHP_EOL;
