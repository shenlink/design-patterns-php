<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Basic;

// 具体工厂C
class CFactory implements IFactory
{
    // 创建产品A
    public function createProductA(): ProductA
    {
        return new ProductA();
    }

    // 创建产品B
    public function createProductB(): ProductB
    {
        return new ProductB();
    }
}