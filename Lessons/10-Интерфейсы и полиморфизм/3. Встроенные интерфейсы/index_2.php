<?php

class Manager implements Iterator
{
    private $sales = [];
    private $position = 0;

    public function addSale($goodName)
    {
        $this->sales[] = $goodName;
    }

    public function current()
    {
        return $this->sales[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->sales[$this->position]);
    }
}

$manager = new Manager();

$manager->addSale('MacBook');
$manager->addSale('ThinkPad');
$manager->addSale('HP ProBook');

echo 'Менеджер продал ' . PHP_EOL;

foreach ($manager as $item) {
    echo $item . PHP_EOL;
}
