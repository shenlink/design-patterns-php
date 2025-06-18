<?php

declare(strict_types=1);

namespace Tests\Unit\Decorator\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Decorator\Basic\Component;
use Shenlink\DesignPattern\Decorator\Basic\ConcreteComponent;
use Shenlink\DesignPattern\Decorator\Basic\ConcreteDecorator;
use Shenlink\DesignPattern\Decorator\Basic\Decorator;
use Tests\Support\OutputCapture;

// 装饰者测试类
class DecoratorTest extends TestCase
{
    private Decorator $decorator;
    private Component $component;

    public function testDecorator()
    {
        $this->component = new ConcreteComponent();
        $this->decorator = new ConcreteDecorator($this->component);
        $output = OutputCapture::capture(fn() => $this->decorator->operation());
        $this->assertEquals('ConcreteComponent operation' . PHP_EOL . 'add behavior' . PHP_EOL, $output);
    }
}