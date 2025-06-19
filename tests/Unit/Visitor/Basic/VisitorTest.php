<?php

declare(strict_types=1);

namespace Tests\Unit\Visitor\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Visitor\Basic\ConcreteElementA;
use Shenlink\DesignPattern\Visitor\Basic\ConcreteElementB;
use Shenlink\DesignPattern\Visitor\Basic\ConcreteVisitorA;
use Shenlink\DesignPattern\Visitor\Basic\ConcreteVisitorB;
use Shenlink\DesignPattern\Visitor\Basic\ObjectStructure;
use Tests\Support\OutputCapture;

// 访问者测试
class VisitorTest extends TestCase
{
    public function testVisitor()
    {
        $objectStructure = new ObjectStructure();
        $objectStructure->add(new ConcreteElementA());
        $objectStructure->add(new ConcreteElementB());

        $output = OutputCapture::capture(fn() => $objectStructure->accept(new ConcreteVisitorA()));
        $this->assertSame('ConcreteVisitorA visitA' . PHP_EOL . 'ConcreteVisitorA visitB' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $objectStructure->accept(new ConcreteVisitorB()));
        $this->assertSame('ConcreteVisitorB visitA' . PHP_EOL . 'ConcreteVisitorB visitB' . PHP_EOL, $output);
    }
}
