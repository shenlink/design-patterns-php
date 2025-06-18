<?php

declare(strict_types=1);

namespace Tests\Unit\Flyweight\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Flyweight\Basic\FlyweightFactory;
use Tests\Support\OutputCapture;

// 享元测试类
class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $factory = new FlyweightFactory();
        $flyweight = $factory->getFlyweight('test');
        $output = OutputCapture::capture(fn() => $flyweight->operation('test'));
        $this->assertSame('内部状态：内部状态 外部状态：test' . PHP_EOL, $output);
    }
}