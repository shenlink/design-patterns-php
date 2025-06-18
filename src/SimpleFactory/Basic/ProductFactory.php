<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\SimpleFactory\Basic;

use Exception;

// 产品工厂类，用于生产产品实例
class ProductFactory
{
    /**
     * 根据产品类型创建产品实例，如果类型不存在则抛出异常
     * @param string $type 产品类型
     * @return IProduct 产品实例
     * @throws Exception
     */
    public function createProduct(string $type): IProduct
    {
        switch ($type) {
            case ProductA::class:
                return new ProductA();
            case ProductB::class:
                return new ProductB();
            default:
                throw new Exception("Invalid product type");
        }
    }
}
