<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Basic;

// 产品接口
interface IProduct
{
    // 获取产品名称
    public function getName(): string;

    // 获取产品价格
    public function getPrice(): float;
}
