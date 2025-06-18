<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Basic;

// 产品B
class ProductB implements IProduct
{
    // 获取产品名称
    public function getName(): string
    {
        return 'Product B';
    }

    // 获取产品价格
    public function getPrice(): float
    {
        return 20.0;
    }
}
