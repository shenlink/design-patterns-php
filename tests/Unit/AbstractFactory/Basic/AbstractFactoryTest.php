<?php

declare(strict_types=1);

namespace Tests\Unit\AbstractFactory\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\AbstractFactory\Basic\CFactory;
use Shenlink\DesignPattern\AbstractFactory\Basic\DFactory;
use Shenlink\DesignPattern\AbstractFactory\Basic\ProductA;
use Shenlink\DesignPattern\AbstractFactory\Basic\ProductB;

// 抽象工厂测试类
class AbstractFactoryTest extends TestCase
{
    // 测试C工厂
    public function testCFactory(): void
    {
        $factory = new CFactory();
        $productA = $factory->createProductA();
        $this->assertInstanceOf(ProductA::class, $productA);
        $this->assertSame('Product A', $productA->getName());
        $this->assertSame(10.0, $productA->getPrice());

        $productB = $factory->createProductB();
        $this->assertInstanceOf(ProductB::class, $productB);
        $this->assertSame('Product B', $productB->getName());
        $this->assertSame(20.0, $productB->getPrice());
    }

    // 测试D工厂
    public function testDFactory(): void
    {
        $factory = new DFactory();
        $productA = $factory->createProductA();
        $this->assertInstanceOf(ProductA::class, $productA);
        $this->assertSame('Product A', $productA->getName());
        $this->assertSame(10.0, $productA->getPrice());

        $productB = $factory->createProductB();
        $this->assertInstanceOf(ProductB::class, $productB);
        $this->assertSame('Product B', $productB->getName());
        $this->assertSame(20.0, $productB->getPrice());
    }
}
