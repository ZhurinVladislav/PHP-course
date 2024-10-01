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

    public function __set($name, $value)
    {
        if ($name == 'string') {
            $this->setString($value);
        }
    }

    public function __get($name)
    {
        if ($name == 'string') {
            $this->getString();
        }
    }
}

$ticker = new Ticker();
// $ticker->string = "<string> alert('ок'); </string>";
$ticker->string = "Я бегущая строка";
echo $ticker->string . PHP_EOL;
