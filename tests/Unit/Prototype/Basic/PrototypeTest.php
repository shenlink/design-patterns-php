<?php

declare(strict_types=1);

namespace Tests\Unit\Prototype\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Prototype\Basic\Other;
use Shenlink\DesignPattern\Prototype\Basic\Prototype;

// 原型测试类
class PrototypeTest extends TestCase
{
    public function testClone(): void
    {
        $other = new Other('other');
        $prototype = new Prototype('test', 'desc', $other);

        $clone = clone $prototype;

        $this->assertSame('test', $clone->getName());
        $this->assertSame('desc', $clone->getDescription());
        $this->assertSame('other', $clone->getOther()->getName());
    }
}