<?php

class Ticker
{
    private $string;

    public function setString($value)
    {
        if (stripos($value, '<script>') !== false) {
            echo 'Строка содержит инъекцию кода!' . PHP_EOL;
            return;
        }
        $this->string = $value;
    }

    public function getString()
    {
        return strtoupper($this->string);
    }
}

$ticker = new Ticker();
// $ticker->setString('<script>alert();</script>');
$ticker->setString('Корректное значение');
echo $ticker->getString() . PHP_EOL;
