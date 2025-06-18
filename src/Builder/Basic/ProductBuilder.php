<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Basic;

// 产品建造者
class ProductBuilder extends Builder
{
    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA(): void
    {
        $this->product->setPartA('PartA');
    }

    public function buildPartB(): void
    {
        $this->product->setPartB('PartB');
    }

    public function buildPartC(): void
    {
        $this->product->setPartC('PartC');
    }
}
