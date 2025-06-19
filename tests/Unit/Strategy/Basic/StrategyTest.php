<?php

declare(strict_types=1);

namespace Tests\Unit\Strategy\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Strategy\Basic\Context;
use Shenlink\DesignPattern\Strategy\Basic\ConcreteStrategyA;
use Shenlink\DesignPattern\Strategy\Basic\ConcreteStrategyB;
use Tests\Support\OutputCapture;

// 策略测试
class StrategyTest extends TestCase
{
    public function testStrategy()
    {
        $context = new Context(new ConcreteStrategyA());
        $output = OutputCapture::capture(fn() => $context->algorithm());
        $this->assertSame('ConcreteStrategyA' . PHP_EOL, $output);
        $context->setStrategy(new ConcreteStrategyB());
        $output = OutputCapture::capture(fn() => $context->algorithm());
        $this->assertSame('ConcreteStrategyB' . PHP_EOL, $output);
    }
}