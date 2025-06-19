<?php

declare(strict_types=1);

namespace Tests\Unit\TemplateMethod\Extend;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\TemplateMethod\Extend\ConcreteClassA;
use Shenlink\DesignPattern\TemplateMethod\Extend\ConcreteClassB;
use Tests\Support\OutputCapture;

// 模板方法测试
class TemplateTest extends TestCase
{
    public function testTemplate()
    {
        $concreteClassA = new ConcreteClassA(true);
        $output = OutputCapture::capture(fn() => $concreteClassA->templateMethod());
        $this->assertSame('ConcreteClassA step1' . PHP_EOL . 'ConcreteClassA step2' . PHP_EOL . 'ConcreteClassA step3' . PHP_EOL, $output);

        $concreteClassB = new ConcreteClassB(false);
        $output = OutputCapture::capture(fn() => $concreteClassB->templateMethod());
        $this->assertSame('ConcreteClassB step2' . PHP_EOL . 'ConcreteClassB step3' . PHP_EOL, $output);
    }
}
