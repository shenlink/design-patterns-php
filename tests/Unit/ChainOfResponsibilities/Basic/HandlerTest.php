<?php

declare(strict_types=1);

namespace Tests\Unit\ChainOfResponsibilities\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\ChainOfResponsibilities\Basic\ConcreteHandlerA;
use Shenlink\DesignPattern\ChainOfResponsibilities\Basic\ConcreteHandlerB;

// 职责链测试
class HandlerTest extends TestCase
{
    public function testHandler()
    {
        $handlerA = new ConcreteHandlerA();
        $handlerB = new ConcreteHandlerB();
        $handlerA->setSuccessor($handlerB);
        $this->assertSame('ConcreteHandler handled request1', $handlerA->handle('request1'));
        $this->assertSame('ConcreteHandlerB handled request2', $handlerA->handle('request2'));
    }
}