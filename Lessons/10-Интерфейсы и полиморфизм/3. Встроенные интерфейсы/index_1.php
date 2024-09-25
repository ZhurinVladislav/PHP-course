<?php

class Manager implements Countable
{
    private $sales = [];

    public function addSale($goodName)
    {
        $this->sales[] = $goodName;
    }

    public function count()
    {
        return count($this->sales);
    }
}

$manager = new Manager();

$manager->addSale('MacBook');
$manager->addSale('ThinkPad');
$manager->addSale('HP ProBook');

echo 'Менеджер продал ' . count($manager) . ' ноутбуков';
