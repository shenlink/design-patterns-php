<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Solution;

class ProductList extends AbstractList
{
    public function __construct(array $items)
    {
        parent::__construct($items);
    }

    public function createIterator(): Iterator
    {
        return new ProductIterator($this);
    }
}
