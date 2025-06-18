<?php

declare(strict_types=1);

namespace Tests\Unit\Builder\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Builder\Basic\Director;
use Shenlink\DesignPattern\Builder\Basic\Product;
use Shenlink\DesignPattern\Builder\Basic\ProductBuilder;
use Tests\Support\OutputCapture;

// 建造者测试类
class BuilderTest extends TestCase
{
    public function testBuild(): void
    {
        $director = new Director(new ProductBuilder());
        $product = $director->build();
        $this->assertInstanceOf(Product::class, $product);
        $output = OutputCapture::capture(fn() => $product->show());
        $this->assertEquals('Product Parts: PartA, PartB, PartC', $output);
    }
}