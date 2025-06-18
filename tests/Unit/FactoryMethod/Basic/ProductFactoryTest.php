<?php

declare(strict_types=1);

namespace Tests\Unit\FactoryMethod\Basic;

use Shenlink\DesignPattern\FactoryMethod\Basic\ProductA;
use Shenlink\DesignPattern\FactoryMethod\Basic\ProductAFactory;
use Shenlink\DesignPattern\FactoryMethod\Basic\ProductB;
use Shenlink\DesignPattern\FactoryMethod\Basic\ProductBFactory;
use PHPUnit\Framework\TestCase;;

// 产品工厂测试类
class ProductFactoryTest extends TestCase
{
    // 测试创建产品
    public function testCreateProduct()
    {
        $factory = new ProductAFactory();
        $product = $factory->createProduct();
        $this->assertInstanceOf(ProductA::class, $product);
        $this->assertEquals('Product A', $product->getName());
        $this->assertEquals(10.0, $product->getPrice());

        $factory = new ProductBFactory();
        $product = $factory->createProduct();
        $this->assertInstanceOf(ProductB::class, $product);
        $this->assertEquals('Product B', $product->getName());
        $this->assertEquals(20.0, $product->getPrice());
    }
}