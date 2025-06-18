<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Basic;

// 建造者
abstract class Builder
{
    protected Product $product;

    public abstract function buildPartA(): void;

    public abstract function buildPartB(): void;

    public abstract function buildPartC(): void;

    public function getProduct(): Product
    {
        return $this->product;
    }
}