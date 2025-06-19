<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Basic;

class ConcreteAggregate implements Aggregate
{
    private array $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItem(int $index): string
    {
        return $this->items[$index];
    }

    public function createIterator(): Iterator
    {
        return new ConcreteIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }
}