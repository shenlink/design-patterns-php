<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Basic;

// 抽象工厂接口
interface IFactory
{
    // 创建产品A
    public function createProductA(): ProductA;

    // 创建产品B
    public function createProductB(): ProductB;
}