<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Solution;

abstract class AbstractList
{
    protected array $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function add(string $item): void
    {
        $this->items[] = $item;
    }

    public function remove(string $item): void
    {
        foreach ($this->items as $key => $value) {
            if ($item === $value) {
                unset($this->items[$key]);
            }
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public abstract function createIterator(): Iterator;
}