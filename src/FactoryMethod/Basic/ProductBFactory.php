<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Basic;

// 产品B的工厂类
class ProductBFactory implements IProductFactory
{
    /**
     * 创建产品B
     * @return IProduct
     */
    public function createProduct(): IProduct
    {
        return new ProductB();
    }
}