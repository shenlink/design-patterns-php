<?php

declare(strict_types=1);

namespace Tests\Unit\SimpleFactory\Basic;

use Shenlink\DesignPattern\SimpleFactory\Basic\ProductA;
use Shenlink\DesignPattern\SimpleFactory\Basic\ProductB;
use Shenlink\DesignPattern\SimpleFactory\Basic\ProductFactory;
use Exception;
use PHPUnit\Framework\TestCase;

// 产品工厂测试类
class ProductFactoryTest extends TestCase
{
    // 测试创建产品
    public function testCreateProduct(): void
    {
        $factory = new ProductFactory();
        $product = $factory->createProduct(ProductA::class);
        $this->assertEquals('Product A', $product->getName());
        $this->assertEquals(10.0, $product->getPrice());
        $product = $factory->createProduct(ProductB::class);
        $this->assertEquals('Product B', $product->getName());
        $this->assertEquals(20.0, $product->getPrice());
    }

    // 测试创建产品失败
    public function testCreateProductFailed(): void
    {
        $factory = new ProductFactory();
        $this->expectException(Exception::class);
        $factory->createProduct('c');
    }
}
