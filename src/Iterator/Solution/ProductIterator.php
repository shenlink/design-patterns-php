<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Solution;

class ProductIterator implements Iterator
{
    private array $products;
    private int $cursor1;
    private int $cursor2;

    public function __construct(ProductList $list)
    {
        $this->products = $list->getItems();
        $this->cursor1 = 0;
        $this->cursor2 = count($this->products) - 1;
    }

    public function next(): void
    {
        if ($this->cursor1 < count($this->products)) {
            $this->cursor1++;
        }
    }

    public function prev(): void
    {
        if ($this->cursor2 > -1) {
            $this->cursor2--;
        }
    }

    public function isFirst(): bool
    {
        return $this->cursor2 === -1;
    }

    public function isLast(): bool
    {
        return $this->cursor1 === count($this->products);
    }

    public function getNextItem(): string
    {
        return $this->products[$this->cursor1];
    }

    public function getPrevItem(): string
    {
        return $this->products[$this->cursor2];
    }
}