<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Basic;

// 产品A
class ProductA implements IProduct
{
    // 获取产品名称
    public function getName(): string
    {
        return 'Product A';
    }

    // 获取产品价格
    public function getPrice(): float
    {
        return 10.0;
    }
}
