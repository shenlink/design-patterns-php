<?php

declare(strict_types=1);

namespace Tests\Unit\Strategy\Extend;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Strategy\Extend\Context;
use Shenlink\DesignPattern\Strategy\Extend\ConcreteStrategyA;
use Shenlink\DesignPattern\Strategy\Extend\ConcreteStrategyB;
use Shenlink\DesignPattern\Strategy\Extend\StrategyFactory;
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

        $factory = new StrategyFactory();
        $context = new Context($factory->getStrategy(ConcreteStrategyA::class));
        $output = OutputCapture::capture(fn() => $context->algorithm());
        $this->assertSame('ConcreteStrategyA' . PHP_EOL, $output);
        $context->setStrategy($factory->getStrategy(ConcreteStrategyB::class));
        $output = OutputCapture::capture(fn() => $context->algorithm());
        $this->assertSame('ConcreteStrategyB' . PHP_EOL, $output);
    }
}