<?php

declare(strict_types=1);

namespace Tests\Unit\Flyweight\Extend;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Flyweight\Extend\FlyweightFactory;
use Tests\Support\OutputCapture;

// 享元测试类
class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $factory = new FlyweightFactory();
        $flyweight = $factory->getFlyweight('test');
        $output = OutputCapture::capture(fn() => $flyweight->operation());
        $this->assertSame('内部状态：内部状态' . PHP_EOL, $output);
    }
}