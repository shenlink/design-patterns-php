<?php

declare(strict_types=1);

namespace Tests\Unit\TemplateMethod\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\TemplateMethod\Basic\ConcreteClassA;
use Shenlink\DesignPattern\TemplateMethod\Basic\ConcreteClassB;
use Tests\Support\OutputCapture;

// 模板方法测试
class TemplateTest extends TestCase
{
    public function testTemplate()
    {
        $concreteClassA = new ConcreteClassA();
        $output = OutputCapture::capture(fn() => $concreteClassA->templateMethod());
        $this->assertSame('ConcreteClassA step1' . PHP_EOL . 'ConcreteClassA step2' . PHP_EOL . 'ConcreteClassA step3' . PHP_EOL, $output);

        $concreteClassB = new ConcreteClassB();
        $output = OutputCapture::capture(fn() => $concreteClassB->templateMethod());
        $this->assertSame('ConcreteClassB step1' . PHP_EOL . 'ConcreteClassB step2' . PHP_EOL . 'ConcreteClassB step3' . PHP_EOL, $output);
    }
}
