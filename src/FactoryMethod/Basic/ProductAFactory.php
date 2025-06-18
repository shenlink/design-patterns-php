<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Basic;

// 产品A的工厂类
class ProductAFactory implements IProductFactory
{
    /**
     * 创建产品A
     * @return IProduct
     */
    public function createProduct(): IProduct
    {
        return new ProductA();
    }
}