<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Basic;

// 产品工厂接口
interface IProductFactory
{
    public function createProduct(): IProduct;
}