<?php

declare(strict_types=1);

namespace Tests\Unit\State\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\State\Basic\ConcreteStateA;
use Shenlink\DesignPattern\State\Basic\Context;
use Tests\Support\OutputCapture;

// 状态模式
class StateTest extends TestCase
{
    public function testState()
    {
        $context = new Context(new ConcreteStateA());
        $output = OutputCapture::capture(fn() => $context->request());
        $this->assertEquals('ConcreteStateA' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $context->request());
        $this->assertEquals('ConcreteStateB' . PHP_EOL, $output);
    }
}
